<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;

class GejalaController extends Controller
{
    //
    public function index(){
    	$data 	= Gejala::get()->all();
    	return view('gejala.index', compact('data'));
    }

    public function create()
    {
        return view('gejala.create');
    }

    public function store(Request $request)
    {

        $sk = new Gejala;
        $sk->kode_gejala = $request->kode_gejala;
        $sk->nama_gejala = $request->nama_gejala;
        $sk->nilai = $request->nilai;
        $sk->save();

        if ($sk->save()) {
            return redirect('gejala')->with('success', 'Tambah Gejala berhasil!');
        }
        else {
            return redirect()->back()->with('erros', 'Tambah Gejala gagal!');
        }

    }

    public function show($id_Gejala)
    {
        $data = Gejala::where('id', $id_Gejala)->first();
        return view('gejala.edit', compact('data'));
    }

    public function update(Request $request, $id_Gejala)
    {

        $sk = Gejala::where('id', $id_Gejala)->first();
        $sk->kode_gejala = $request->kode_gejala;
        $sk->nama_gejala = $request->nama_gejala;
        $sk->nilai = $request->nilai;
        $sk->save();

        if ($sk->save()) {
            return redirect('gejala')->with('success', 'Edit Gejala berhasil.!');
        }
        else {
            return redirect()->back()->with('erros', 'Edit Gejala gagal.!');
        }
    }

    public function destroy($id_Gejala)
    {
        $data = Gejala::where('id', $id_Gejala)->delete();
        return redirect('gejala')->with('success', 'Hapus Gejala berhasil.!');
    }
}
