<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserslvlController extends Controller
{
       public function index()
    {
        $Users_lvl = \App\Users_lvl::all();
        return view('coba.userslvl', ['Users_lvl' => $Users_lvl]);
    }
    public function create(Request $request)
    {
        \App\Users_lvl::create($request->all());
        return back()->with('sukses', 'Data sukses ditambahkan');
    }
    public function update(request $request)
    {
        // dd($request->all());
       $Users_lvl = \App\Users_lvl::find($request->id_lvl);
       $Users_lvl->update($request->all());
        return back()->with('sukses', 'Data berhasil diubah');
    }
    public function delete($id_lvl)
    {
        $Users_lvl = \App\Users_lvl::find($id);
        $Users_lvl->delete($Users_lvl);
        return back()->with('sukses', 'Data sukses dihapus');
    }
}
