<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form2Controller extends Controller
{
    public function index()
    {
        $formA = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'A.Analisis SWOT')
            ->get();
        $formB = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'VIsi, Misi, Tujuan dan Sasaran')
            ->get();
        $formC = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Tata Pamong')
            ->get();
        return view('form2.index', ['formB' => $formB], ['formA' => $formA], ['formC' => $formC]);
    }
}
