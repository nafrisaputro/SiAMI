<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalAuditController extends Controller
{
    public function index()
	{
		$jadwalaudit = \App\Jadwal_audit::all();
		return view('jadwalaudit.index', ['jadwalaudit' => $jadwalaudit]);
	}
	  public function kps()
	{
		$jadwalaudit = \App\Jadwal_audit::all();
		return view('jadwalaudit.kps', ['jadwalaudit' => $jadwalaudit]);
	}
	  public function kajur()
	{
		$jadwalaudit = \App\Jadwal_audit::all();
		return view('jadwalaudit.kajur', ['jadwalaudit' => $jadwalaudit]);
	}
}
