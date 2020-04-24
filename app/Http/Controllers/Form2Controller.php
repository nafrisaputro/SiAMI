<?php

namespace App\Http\Controllers;

use App\Form2;
use Illuminate\Http\Request;

class Form2Controller extends Controller
{
    public function index()
    {
        $formA = \App\Form2::select('id_form2', 'elemen', 'sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'A.Analisis SWOT')
            ->get();
        $formB = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'VIsi, Misi, Tujuan dan Sasaran')
            ->get();
        $formC = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Tata Pamong')
            ->get();
        $formD = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Sistem Manajemen Mutu')
            ->get();
        $formE = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Kerja Sama')
            ->get();
        $formF = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Manajemen Sumberdaya')
            ->get();
        $formG = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Pelaksanaan Proses')
            ->get();
        $formH = \App\Form2::select('sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Pengukuran, Analisis dan Perbaikan')
            ->get();
        return view('form2.index', [
            'formA' => $formA, 'formB' => $formB, 'formC' => $formC, 'formD' => $formD, 'formE' => $formE, 'formF' => $formF, 'formG' => $formG, 'formH' => $formH
        ]);
    }
    public function create(Request $request)
    {
        // dd($request->all());
        Form2::create($request->all());
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');
    }
    public function update(Request $request, $id)
    {
        dd($request->all());

        $form2 = \App\Form2::find($id);
        $form2->update($request->all());
        $form2->elemen = $request->elemen;
        $form2->sub_elemen = $request->sub_elemen;
        $form2->nama_dokumen = $request->nama_dokumen;
        $form2->keterangan = $request->keterangan;

        $form2->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');



        // Form2::find($request->pk)->update([$request->name => $request->value]);
        // return response()->json(['success' => 'done']);
    }
    public function delete($id)
    {
        $form2 = \App\Form2::find($id);
        $form2->delete($form2);
        return redirect('/form2')->with('sukses', 'Data sukses dihapus');
    }
}
