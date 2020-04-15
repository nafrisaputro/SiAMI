<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form5ptppController extends Controller
{
	public function index()
	{
		$table_form5 = \App\Ptpp::all();
		$prodi = \App\Prodi::all();
		return view('form5ptpp.index', ['table_form5' => $table_form5], ['prodi' => $prodi] );
	}
	public function create(Request $request)
	{
    $form5 = new \App\Ptpp;
    // \App\Ptpp::create($request->all());
		// dd($request->all());
    $form5->no_ptpp = $request->no;
    $form5->deskripsi_kondisi = $request->deskripsi;
    $form5->hasil_temuan = $request->radio;
    $form5->kriteria = $request->radio2;
    $form5->akar_masalah = $request->masalah;
    $form5->akibat_resiko = $request->akibat;
    $form5->rekomendasi = $request->rekom;
    $form5->jadwal_perbaikan = $request->jadwal;
    $form5->pj_perbaikan = $request->gkm;
    $form5->id_prodi = $request->prodi;
    $form5->status = $request->status;
    $form5->save();
    return back()->with('sukses', 'Data sukses ditambahkan');
	}

	public function edit()
	{

	}
	public function delete($id)
	{
	$form5 = \App\Ptpp::find($id);
    $form5->delete($form5);
    return back()->with('sukses', 'Data sukses dihapus');
	}

	public function kps()
	{
		$table_form5 = \App\Ptpp::all();
		return view('form5ptpp.kpsform5', ['table_form5' => $table_form5]);
	}
	public function edit1()
	{
    	// $table_form5 = new \App\Ptpp;
    	// $table_form5->tanggapan_audit = $request->auditi;
    	// $table_form5->rencana_perbaikan = $request->perbaikan;
    	// $table_form5->save();

		// $table_form5 = \App\Ptpp::findOrFail($request->idd);
		$table_form5->update($request->all());

		return back()->with('sukses', 'Data sukses ditambahkan');;
	}

	public function kajur()
	{
		$table_form5 = \App\Ptpp::all();
		return view('form5ptpp.kajurform5', ['table_form5' => $table_form5]);
	}
	public function edit2()
	{

	}
}
