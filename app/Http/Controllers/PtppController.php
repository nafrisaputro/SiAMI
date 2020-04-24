<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PtppController extends Controller
{
	public function index()
	{
		$table_form5 = \App\Ptpp::all();
		return view('ptpp.index', ['table_form5' => $table_form5]);
	}
	public function jurusan()
	{
		$table_form5 = \App\Ptpp::all();
		return view('ptpp.jurusan', ['table_form5' => $table_form5]);
	}
	public function prodi()
	{
		$table_form5 = \App\Ptpp::all();
		return view('ptpp.jurusan', ['table_form5' => $table_form5]);
	}

	public function btn(Request $request, $id)
	{
		// dd($request->all());
		$form5 = \App\Ptpp::find($id);
		$form5->status = $request->btn;
		$form5->save();
		// $form5->update($request->all());
		return redirect('/ptpp')->with('sukses', 'Data berhasil di ubah');
	}
}
