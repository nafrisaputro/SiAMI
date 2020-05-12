<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Form5ptppController extends Controller
{
	public function index()
	{
		$table_form5 = \App\Ptpp::all();
		$prodi = \App\Prodi::all();
		$jadwal = \App\Jadwal::all();
		return view('form5ptpp.index', ['table_form5' => $table_form5, 'prodi' => $prodi, 'jadwal' => $jadwal]);
	}
	public function create(Request $request)
	{
		$form5 = new \App\Ptpp;
		// \App\Ptpp::create($request->all());
		// dd($request->tgl_audit);
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
		$form5->tanggal_audit = $request->tgl_audit;
		$form5->status = $request->status;
		$form5->save();
		return back()->with('sukses', 'Data sukses ditambahkan');
	}

	public function edit(request $request)
	{
		// dd($request->all());
		$form5 = \App\Ptpp::find($request->id);
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
		$form5->tanggal_audit = $request->tgl_audit;
		$form5->status = $request->status;
		$form5->save();
		return back()->with('sukses', 'Data berhasil diubah');
	}


	public function delete($id)
	{
		$form5 = \App\Ptpp::find($id);
		$form5->delete($form5);
		return back()->with('sukses', 'Data sukses dihapus');
	}

	public function kps()
	{
		$table_form5 = \App\Ptpp::all()
			->where('id_prodi', auth()->user()->id_prodi);
		return view('form5ptpp.kpsform5', ['table_form5' => $table_form5]);
	}
	public function edit1(request $request)
	{
		// dd($request->all());
		$form5 = \App\Ptpp::find($request->id);
		$form5->tanggapan_audit = $request->auditi;
		$form5->rencana_perbaikan = $request->perbaikan;
		$form5->save();
		return back()->with('sukses', 'Data berhasil diubah');
	}

	public function kajur()
	{
		$table_form5 = DB::table('table_ptpp')
			->join('prodi', 'table_ptpp.id_prodi', '=', 'prodi.id_prodi')
			->select(
				'table_ptpp.id',
				'table_ptpp.id_prodi',
				'table_ptpp.no_ptpp',
				'table_ptpp.hasil_temuan',
				'table_ptpp.deskripsi_kondisi',
				'table_ptpp.akar_masalah',
				'table_ptpp.kriteria',
				'table_ptpp.akibat_resiko',
				'table_ptpp.rencana_perbaikan',
				'table_ptpp.tanggapan_audit',
				'table_ptpp.rekomendasi',
				'table_ptpp.jadwal_perbaikan',
				'table_ptpp.pj_perbaikan',
				'table_ptpp.rencana_pencegahan',
				'table_ptpp.jadwal_pencegahan',
				'table_ptpp.pj_pencegahan',
				'table_ptpp.status',
				'prodi.id_jurusan'
			)
			->where('id_jurusan', auth()->user()->id_jurusan);
		$table_form5 = $table_form5->get();
		return view('form5ptpp.kajurform5', ['table_form5' => $table_form5]);
	}
	public function edit2(request $request)
	{
		// dd($request->all());
		$form5 = \App\Ptpp::find($request->id);
		$form5->rencana_pencegahan = $request->pencegahan;
		$form5->jadwal_pencegahan = $request->jadwal;
		$form5->pj_pencegahan = $request->pj;
		$form5->save();
		return back()->with('sukses', 'Data berhasil diubah');
	}
}
