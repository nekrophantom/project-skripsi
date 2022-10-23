<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Bobot_nilai;
use App\Models\HasilAnalisa;
use App\Models\User;
use App\Models\Rules;

class AnalisaController extends Controller
{
    //

    public function index(){
        $dataLogin = session('auth_user');
        $bobot    = Bobot_nilai::get()->all();
        $gejala         = Gejala::get()->all();
    	return view('analisa.index', compact('dataLogin','bobot','gejala'));
    }

    public function store(Request $request)
    {
        $dataLogin = session('auth_user');
        $checkArray = array_sum($request->bobot);
        if($checkArray == 0){
            return redirect('analisa')->with('erros', 'Silahkan pilih gejala!');
        }
        $bobot_user = $request->bobot;
        $id_gejalas = [];
        foreach ($bobot_user as $bkey => $b) {
            if($b == 0){
                unset($bobot_user[$bkey]);
            }else{
                $id_gejalas[] = $bkey;
            }
        }
        $count = count($id_gejalas);
        if($count >= 7){

            $gejala = Gejala::whereIn('id', $id_gejalas)->get()->all();
            // MENAMBAHKAN ARRAY NILAI GEJALA USER KE GEJALA PAKAR
            foreach ($gejala as $gpk => $gpval) {
                $gejala[$gpk]->nilai_user = $bobot_user[$gpval->id];
            }


            // Hitung CF USER dan CF PAKAR
            foreach ($gejala as $k => $v) {
                $CF = $v->nilai * $v->nilai_user;
                $gejala[$k]->CF = $CF;
            }

            // Ambil list penyakit yang memiliki gejala yang di pilih berdasarkan rules
            $rules_penyakit = Rules::select('p.*','g.nama_gejala','rules.gejala_id')->join('penyakit AS p','p.id','rules.penyakit_id')->join('gejala AS g','g.id','rules.gejala_id')->whereIn('gejala_id', $id_gejalas)->get()->all();

            $penyakit       = []; // Parameter untuk grouping rules penyakit
            foreach ($rules_penyakit as $rk => $r) {
                if (!array_key_exists($r->id, $penyakit)) { // check if array key penyakit id exist buat array baru
                    $penyakit[$r->id] = [
                        'kode_penyakit' => $r->kode_penyakit,
                        'nama_penyakit' => $r->nama_penyakit,
                        'penyebab'      => $r->penyebab,
                        'solusi'        => $r->solusi,
                        'gejala'        => [$r->gejala_id]
                    ];
                }else{
                    // Kalo exist appen array gejala
                    array_push($penyakit[$r->id]['gejala'], $r->gejala_id);
                }
            }
            // perhitungan CF
            foreach ($penyakit as $kk => $pp) {
                if(count($pp['gejala']) > 1){
                    // Hitung CF Combine kalo gejala lebih dari 1
                    $list_combine = [];
                    $hasil_akhir  = 0;
                    foreach ($pp['gejala'] as $z => $v) {
                        $next_key = $z+1;
                        $is_next_exist = array_key_exists($next_key, $pp['gejala']);
                        if($is_next_exist){
                            $next_id = $pp['gejala'][$next_key];
                            $fgejala = $this->findIdInGejala($v, $gejala);
                            $ngejala = $this->findIdInGejala($next_id, $gejala);
                            if($hasil_akhir == 0){
                                $penyakit[$kk]['cfold_rumus'][] = [
                                    'c1' => $fgejala->CF,
                                    'c2' => $ngejala->CF    
                                ];
                                $hitung  = ($fgejala->CF + $ngejala->CF) * (1-$fgejala->CF); // Jika masih pertama kali
                            }else{
                                $penyakit[$kk]['cfold_rumus'][] = [
                                    'c1' => $hitung,
                                    'c2' => $ngejala->CF    
                                ];
                                $hitung  = ($hitung + $ngejala->CF) * (1-$fgejala->CF); // Hitung sama dengan oldcf iterasi sebelum nya
                            }
                            

                            $list_combine[] = $hitung; // Tambah cfold
                            $hasil_akhir    = $hitung;
                        }
                    }
                    $nilaiAkhirAwal = round(($hasil_akhir*100) + 100);
                    $penyakit[$kk]['list_cfold']        = $list_combine;
                    //$penyakit[$kk]['hasil_cf_penyakit'] = $hasil_akhir*100;
                    $penyakit[$kk]['hasil_cf_penyakit'] = cal_percentage($nilaiAkhirAwal, 560);
                }else{
                    $fgejala = $this->findIdInGejala($pp['gejala'][0], $gejala);
                    $list_combine = [];
                    $hasil_akhir  = $fgejala->CF;
                    $penyakit[$kk]['list_cfold']        = $list_combine;
                    $cekbagi[$kk]['hasil_cf_penyakit'] = cal_percentage($nilaiAkhirAwal, 100);
                    //$penyakit[$kk]['hasil_cf_penyakit'] = $hasil_akhir*100;
                }
            }
            //debugCode($penyakit);
            $data = [
                'gejala'   => $gejala,
                'penyakit' => $penyakit
            ];
            $sk = new HasilAnalisa;
            $sk->nama = $dataLogin['nama'];
            $sk->hasil_analisa = json_encode($data);
            $sk->save();
            $last_id = $sk->id;

            return redirect('hasil-analisa/'.$last_id)->with('success', 'Analisa berhasil!');
        }else{
            return redirect()->back()->with('error', 'Kamu tidak memiliki riwayat penyakit wasir');
        }
    }

    private function findIdInGejala($id, $gejala)
    {
        foreach ($gejala as $k => $v) {
            if($v->id == $id){
                return $v;
            }
        }
    }

    public function hasil_analisa($id){
        $dataLogin = session('auth_user');
        $detailData = HasilAnalisa::where('id',$id)->first();

        $detailData->hasil_analisa = json_decode($detailData->hasil_analisa, true);
        foreach($detailData->hasil_analisa['penyakit'] AS $k => $p){
            $rank[$k] = $p['hasil_cf_penyakit'];
        }
        //$rank = array_column($detailData->hasil_analisa['penyakit'], 'hasil_cf_penyakit');
        /* arsort($rank);
        $rank      = $rank; 
        */
        $detailData = $detailData;
        return view('analisa.hasil', compact('rank','detailData','dataLogin'));
    }
}
