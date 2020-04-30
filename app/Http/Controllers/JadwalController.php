<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
	public function index()
	{
		$jadwal = \App\Jadwal::all();
		$prodi = \App\Prodi::all();
		return view('jadwal.index', ['jadwal' => $jadwal, 'prodi' => $prodi]);
	}
	public function create(Request $request)
	{
		// dd($request->all());
		$ruang = $request->ruang;
		$ruangl = ' ';
		for($count = 0; $count < count($ruang); $count++)
		{
			// $no = strval($count+1);
			// $lingkup = $no.'. '.$ruang[$count]."\r\n";
			$lingkup = $ruang[$count]."\r\n";
			$ruangl .= $lingkup;
		} 

		$data = ["1. Pembukaan", "2. Pemeriksaan dokumen", "3. Audit", "4. Penyampaian hasil audit","5. Penanda tangan","6. Penutup" ];

		$jadwal = new \App\Jadwal;
		$jadwal->tgl_audit = $request->tgl;
		$jadwal->lokasi = $request->prodi;
		// $jadwal->ruang_lingkup = implode("<br>", $request->ruang); 
		$jadwal->ruang_lingkup = $ruangl;
		$jadwal->tahap_audit = implode("\r\n", $data); 
		$jadwal->auditi = $request->auditi;
		$jadwal->wakil_auditi = $request->wakil;
		$jadwal->auditor_ketua = $request->auditor;
		$jadwal->auditor_anggota = $request->anggota;
		$jadwal->lead_auditor = $request->lead;
		$jadwal->save();
		return back()->with('sukses', 'Data sukses ditambahkan');
	}
	public function edit(Request $request)
	{
		$jadwal = \App\Jadwal::find($request->id_jadwal);
		$ruang = $request->ruang;
		$ruangl = ' ';
		for($count = 0; $count < count($ruang); $count++)
		{
			// $no = strval($count+1);
			// $lingkup = $no.'. '.$ruang[$count]."\r\n";
			$lingkup = $ruang[$count]."\r\n";
			$ruangl .= $lingkup;
		} 
		$jadwal->tgl_audit = $request->tgl;
		$jadwal->lokasi = $request->prodi;
		// $jadwal->tahap_audit = $request->tahap;
		$jadwal->auditi = $request->auditi;
		$jadwal->wakil_auditi = $request->wakil;
		$jadwal->auditor_ketua = $request->auditor;
		$jadwal->auditor_anggota = $request->anggota;
		$jadwal->lead_auditor = $request->lead;
		$jadwal->save();
		return back()->with('sukses', 'Data sukses ditambahkan');
	}
	public function delete($id_jadwal)
	{
		$jadwal = \App\Jadwal::find($id_jadwal);
		$jadwal->delete($jadwal);
		return back()->with('sukses', 'Data sukses dihapus');
	}
}
