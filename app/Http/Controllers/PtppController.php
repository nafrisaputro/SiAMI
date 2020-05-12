<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PtppController extends Controller
{
	public function index()
	{
		$table_form5 = \App\Ptpp::all();
		$jadwal = \App\Jadwal::all();
		return view('ptpp.index', ['table_form5' => $table_form5, 'jadwal' => $jadwal]);
	}
	public function jurusan()
	{
		$table_form5 = DB::table('table_ptpp')
		->join('prodi', 'table_ptpp.id_prodi', '=', 'prodi.id_prodi')
		->where('id_jurusan', auth()->user()->id_jurusan);
		$table_form5 = $table_form5->get();
		return view('ptpp.jurusan', ['table_form5' => $table_form5]);
	}
	public function prodi()
	{
		$table_form5 = \App\Ptpp::all()
		->where('id_prodi', auth()->user()->id_prodi);
		return view('ptpp.prodi', ['table_form5' => $table_form5]);
	}

	public function btn(Request $request, $id)
	{
		// dd($request->all());
		$form5 = \App\Ptpp::find($id);
		$form5->status = $request->btn;
		$form5->save();
		return redirect('/ptpp')->with('sukses', 'Data berhasil di ubah');
	}
}
