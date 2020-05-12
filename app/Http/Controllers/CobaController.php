<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $coba_data = \App\User::all();
        $table_prodi = \App\Prodi::all();
        $table_jurusan = \App\Jurusan::all();
        $userslvl = \App\Users_lvl::all();
        return view('coba.index', ['coba_data' => $coba_data, 'table_prodi' => $table_prodi, 'table_jurusan' => $table_jurusan, 'userslvl' => $userslvl]);
    }
    public function create(Request $request)
    {
        // dd($request->all());

        $user = new \App\User;
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
        }
        $user->level = $request->level;
        $user->name = $request->nama;
        $user->username = $request->username;
        $user->nip = $request->nip;
        $user->password = bcrypt($request->password);
        // $user->remember_token = Str::random(60);
        $user->id_prodi = $request->prodi;
        $user->id_jurusan = $request->jurusan;
        $user->save();

        // $request->request->add(['user_id' => $user->id]);
        // $kep_jurusan = \App\User::create($request->all());

        return back()->with('sukses', 'Data sukses ditambahkan');
    }
    public function edit($id)
    {
        $coba = \App\User::find($id);
        $table_prodi = \App\Prodi::all();
        $table_jurusan = \App\Jurusan::all();
        $userslvl = \App\Users_lvl::all();
        return view('coba/edit', ['coba' => $coba, 'table_prodi' => $table_prodi, 'table_jurusan' => $table_jurusan, 'userslvl' => $userslvl]);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $user = \App\User::find($id);
        // $user->level = $request->level;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->nip = $request->nip;
        // $user->password = bcrypt($request->password);
        $user->id_prodi = $request->prodi;
        $user->id_jurusan = $request->jurusan;
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
        }
        $user->save();
        return redirect('/coba')->with('sukses', 'Data sukses diupdate');
    }
    public function delete($id)
    {
        $coba = \App\User::find($id);
        $coba->delete($coba);
        return redirect('/coba')->with('sukses', 'Data sukses dihapus');
    }
    // public function edit1(Request $request, $id)
    // {

    //     $user = \App\User::find($id);
    //     if ($request->hasFile('foto')) {
    //         $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
    //         $user->foto = $request->file('foto')->getClientOriginalName();
    //     }
    //     $user->level = $request->level;
    //     $user->nama = $request->nama;
    //     $user->username = $request->username;
    //     $user->nip = $request->nip;
    //     $user->password = bcrypt($request->password);
    //     $user->id_prodi = $request->prodi;
    //     $user->id_jurusan = $request->jurusan;
    //     $user->save();
    //     return back()->with('sukses', 'Data sukses diupdate');
    // }
}
