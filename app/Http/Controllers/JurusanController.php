<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $table_jurusan = \App\Jurusan::all();
        return view('jurusan.index', ['table_jurusan' => $table_jurusan]);
    }
    public function create(Request $request)
    {
        \App\Jurusan::create($request->all());
        return redirect('/jurusan')->with('sukses', 'Data sukses ditambahkan');
    }
    public function update(Request $request, $id)
    {
        $jurusan = \App\Jurusan::find($id);
        $jurusan->update($request->all());
        return redirect('/jurusan')->with('sukses', 'Data sukses diupdate');
    }
    public function delete($id)
    {
        $jurusan = \App\Jurusan::find($id);
        $jurusan->delete($jurusan);
        return redirect('/jurusan')->with('sukses', 'Data sukses dihapus');
    }
}
