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
}
