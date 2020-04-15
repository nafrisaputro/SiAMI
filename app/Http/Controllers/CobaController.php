<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $coba_data = \App\User::all();
        return view('coba.index', ['coba_data' => $coba_data]);
    }
    public function create(Request $request)
    {
        // dd($request->all());
        
        $user = new \App\User;
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
        }
        $user->level = $request->level;
        $user->nama = $request->nama;
        $user->nip = $request->nip;
        $user->password = bcrypt($request->password);
        // $user->remember_token = Str::random(60);
        $user->save();

        // $request->request->add(['user_id' => $user->id]);
        // $kep_jurusan = \App\User::create($request->all());

        return redirect('/coba')->with('sukses', 'Data sukses ditambahkan');
    }
    public function edit($id)
    {
        $coba = \App\User::find($id);
        return view('coba/edit', ['coba' => $coba]);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $coba = \App\User::find($id);
        $coba->update($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
        //     $coba->foto = $request->file('foto')->getClientOriginalName();
        //     $coba->save();
        // }
        return redirect('/coba')->with('sukses', 'Data sukses diupdate');
    }
    public function delete($id)
    {
        $coba = \App\User::find($id);
        $coba->delete($coba);
        return redirect('/coba')->with('sukses', 'Data sukses dihapus');
    }
}
