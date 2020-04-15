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
    public function create(Request $reques)
    {
        // dd($reques->all());
        \App\Prodi::create($reques->all());
        return redirect('/prodi')->with('sukses', 'Data sukses ditambahkan');
    }
    public function update(Request $request, $id)
    {
        $prodi = \App\Prodi::find($id);
        $prodi->update($request->all());
        return redirect('/prodi')->with('sukses', 'Data sukses diupdate');
    }
    public function delete($id)
    {
        $prodi = \App\Prodi::find($id);
        $prodi->delete($prodi);
        return redirect('/prodi')->with('sukses', 'Data sukses dihapus');
    }
}
