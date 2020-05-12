<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {

        $table_prodi = \App\Prodi::all();
        $table_jurusan = \App\Jurusan::all();
        return view('prodi.index', ['table_prodi' => $table_prodi], ['table_jurusan' => $table_jurusan]);
    }
    public function create(Request $request)
    {
        // dd($request->all());
        $prodi = new \App\Prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->id_jurusan = $request->id_jurusan;
        $prodi->save();
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $prodi = \App\Prodi::find($request->id);
        $prodi->update($request->all());
        return back()->with('sukses', 'Data berhasil diubah');
    }
    public function delete($id)
    {
        $prodi = \App\Prodi::find($id);
        $prodi->delete($prodi);
        return redirect('/prodi')->with('sukses', 'Data sukses dihapus');
    }
}
