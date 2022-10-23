<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rules;
use App\Models\Gejala;
use App\Models\Penyakit;

class RulesController extends Controller
{
    //
    public function index(){
        $data   = Rules::join('penyakit as p','p.id','rules.penyakit_id')->join('gejala as g','g.id','rules.gejala_id')->select('rules.*','nama_gejala','nama_penyakit')->get()->all();
        return view('rules.index', compact('data'));
    }

    public function create()
    {   
        $penyakit = Penyakit::get()->all();
        $gejala = Gejala::get()->all();
        return view('rules.create',compact('penyakit','gejala'));
    }

    public function store(Request $request)
    {

        $sk = new Rules;
        $sk->gejala_id = $request->gejala_id;
        $sk->penyakit_id = $request->penyakit_id;
        $sk->save();

        if ($sk->save()) {
            return redirect('rules')->with('success', 'Tambah Rules berhasil!');
        }
        else {
            return redirect()->back()->with('erros', 'Tambah Rules gagal!');
        }

    }

    public function show($id_Rules)
    {
        $data = Rules::where('id', $id_Rules)->first();
        $penyakit = Penyakit::get()->all();
        $gejala = Gejala::get()->all();
        return view('rules.edit', compact('data','penyakit','gejala'));
    }

    public function update(Request $request, $id_Rules)
    {

        $sk = Rules::where('id', $id_Rules)->first();
        $sk->gejala_id = $request->gejala_id;
        $sk->penyakit_id = $request->penyakit_id;
        $sk->save();

        if ($sk->save()) {
            return redirect('rules')->with('success', 'Edit Rules berhasil.!');
        }
        else {
            return redirect()->back()->with('erros', 'Edit Rules gagal.!');
        }
    }

    public function destroy($id_Rules)
    {
        $data = Rules::where('id', $id_Rules)->delete();
        return redirect('rules')->with('success', 'Hapus Rules berhasil.!');
    }
}
