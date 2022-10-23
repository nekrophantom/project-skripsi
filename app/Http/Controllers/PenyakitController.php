<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Hash;

class PenyakitController extends Controller
{
    //
    public function index(){
    	$data 	= Penyakit::get()->all();
    	return view('penyakit.index', compact('data'));
    }

    public function create()
    {
        return view('penyakit.create');
    }

    public function store(Request $request)
    {

        $kr = new Penyakit;
        $kr->kode_penyakit = $request->kode_penyakit;
        $kr->nama_penyakit = $request->nama_penyakit;
        $kr->penyebab = $request->penyebab;
        $kr->solusi = $request->solusi;
        $kr->save();

        if ($kr->save()) {
            return redirect('penyakit')->with('success', 'Tambah Penyakit berhasil!');
        }
        else {
            return redirect()->back()->with('erros', 'Tambah Penyakit gagal!');
        }

    }

     public function show($id_penyakit)
    {
        $data 	= Penyakit::where('penyakit.id', '=', $id_penyakit)->first();
        return view('penyakit.edit', compact('data'));
    }

    public function update(Request $request, $id_penyakit)
    {

        $kr = Penyakit::where('id', $id_penyakit)->first();;
        
        $kr->kode_penyakit = $request->kode_penyakit;
        $kr->nama_penyakit = $request->nama_penyakit;
        $kr->penyebab = $request->penyebab;
        $kr->solusi = $request->solusi;
        
        $kr->save();

        if ($kr->save()) {
            if (isset($request->session()->get('auth_user')['nik'])) {
                return redirect()->back()->with('success', 'Edit Penyakit berhasil.!');
            }
            return redirect('penyakit')->with('success', 'Edit Penyakit berhasil.!');
        }
        else {
            return redirect()->back()->with('erros', 'Edit penyakit gagal.!');
        }
    }

    public function destroy($id_penyakit)
    {
        $data = Penyakit::where('id', $id_penyakit)->delete();
        return redirect('penyakit')->with('success', 'Hapus Penyakit berhasil.!');
    }
}
