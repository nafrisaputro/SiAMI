<?php

namespace App\Http\Controllers;

use App\Form2;
use Illuminate\Http\Request;
use DB;

class Form2Controller extends Controller
{
    public function index()
    {
        // ------------------------------------------------------
        $jadwal = DB::table('table_jadwal')
            ->join('prodi', 'table_jadwal.lokasi', '=', 'prodi.id_prodi')
            ->select('table_jadwal.id_jadwal', 'table_jadwal.lokasi', 'table_jadwal.tahap_audit', 'table_jadwal.ruang_lingkup', 'table_jadwal.auditi', 'table_jadwal.wakil_auditi', 'table_jadwal.auditor_ketua', 'table_jadwal.auditor_anggota', 'table_jadwal.lead_auditor', 'table_jadwal.tgl_audit', 'prodi.nama_prodi')
            ->where('lokasi', auth()->user()->id_prodi)->orderby('tgl_audit', 'desc')->limit(1)->get();
        // ->where('lokasi', auth()->user()->id_prodi)->limit(1)->get();
        // --------------------------------------------
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
            'formA' => $formA, 'formB' => $formB, 'formC' => $formC, 'formD' => $formD, 'formE' => $formE, 'formF' => $formF, 'formG' => $formG, 'formH' => $formH, 'jadwal' => $jadwal
        ]);
    }
    public function histori()
    {
        $formA = \App\Form2::select('id_form2', 'elemen', 'sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'A.Analisis SWOT')
            ->get();
        $formB = \App\Form2::select('id_form2', 'sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'VIsi, Misi, Tujuan dan Sasaran')
            ->get();
        $formC = \App\Form2::select('id_form2', 'sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Tata Pamong')
            ->get();
        $formD = \App\Form2::select('id_form2', 'sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Sistem Manajemen Mutu')
            ->get();
        $formE = \App\Form2::select('id_form2', 'sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Kerja Sama')
            ->get();
        $formF = \App\Form2::select('id_form2', 'sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Manajemen Sumberdaya')
            ->get();
        $formG = \App\Form2::select('id_form2', 'sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Pelaksanaan Proses')
            ->get();
        $formH = \App\Form2::select('id_form2', 'sub_elemen', 'keterangan', 'nama_dokumen')
            ->where('elemen', '=', 'Pengukuran, Analisis dan Perbaikan')
            ->get();
        return view('form2.form2h', [
            'formA' => $formA, 'formB' => $formB, 'formC' => $formC, 'formD' => $formD, 'formE' => $formE, 'formF' => $formF, 'formG' => $formG, 'formH' => $formH
        ]);
    }
    public function createA(Request $request)
    {
        dd($request->all());

        // dd($request->all());
        // Form2::create($request->all());
        $formU = new \App\Form2();
        $formU2 = new \App\Form2();
        if ($request->hasFile('nama_dokumen')) {
            $request->file('nama_dokumen')->move('data_form2/', $request->file('nama_dokumen')->getClientOriginalName());
            $formU->nama_dokumen = $request->file('nama_dokumen')->getClientOriginalName();
        }
        $formU->id_prodi = $request->id_prodi;
        $formU->elemen = $request->elemen;
        $formU->sub_elemen = $request->sub_elemen;
        $formU->keterangan = $request->keterangan;
        $formU->save();

        if ($request->hasFile('nama_dokumen1')) {
            $request->file('nama_dokumen1')->move('data_form2/', $request->file('nama_dokumen1')->getClientOriginalName());
            $formU2->nama_dokumen = $request->file('nama_dokumen1')->getClientOriginalName();
        }
        $formU2->id_prodi = $request->id_prodi1;
        $formU2->elemen = $request->elemen1;
        $formU2->sub_elemen = $request->sub_elemen1;
        $formU2->keterangan = $request->keterangan1;
        $formU2->save();

        return redirect('/form2')->with('sukses', 'Data Ditambahkan');
    }
    public function createB(Request $request)
    {
        dd($request->all());
        // Form2::create($request->all());
        $formU = new \App\Form2();
        $formU2 = new \App\Form2();
        $formU3 = new \App\Form2();
        $formU4 = new \App\Form2();
        $formU5 = new \App\Form2();
        $formU6 = new \App\Form2();
        $formU7 = new \App\Form2();
        $formU8 = new \App\Form2();
        $formU9 = new \App\Form2();
        if ($request->hasFile('nama_dokumen')) {
            $request->file('nama_dokumen')->move('data_form2/', $request->file('nama_dokumen')->getClientOriginalName());
            $formU->nama_dokumen = $request->file('nama_dokumen')->getClientOriginalName();
        }
        $formU->id_prodi = $request->id_prodi;
        $formU->elemen = $request->elemen;
        $formU->sub_elemen = $request->sub_elemen;
        $formU->keterangan = $request->keterangan;
        $formU->save();

        if ($request->hasFile('nama_dokumen1')) {
            $request->file('nama_dokumen1')->move('data_form2/', $request->file('nama_dokumen1')->getClientOriginalName());
            $formU2->nama_dokumen = $request->file('nama_dokumen1')->getClientOriginalName();
        }
        $formU2->id_prodi = $request->id_prodi1;
        $formU2->elemen = $request->elemen1;
        $formU2->sub_elemen = $request->sub_elemen1;
        $formU2->keterangan = $request->keterangan1;
        $formU2->save();

        if ($request->hasFile('nama_dokumen2')) {
            $request->file('nama_dokumen2')->move('data_form2/', $request->file('nama_dokumen2')->getClientOriginalName());
            $formU3->nama_dokumen = $request->file('nama_dokumen2')->getClientOriginalName();
        }
        $formU3->id_prodi = $request->id_prodi2;
        $formU3->elemen = $request->elemen2;
        $formU3->sub_elemen = $request->sub_elemen2;
        $formU3->keterangan = $request->keterangan2;
        $formU3->save();

        if ($request->hasFile('nama_dokumen3')) {
            $request->file('nama_dokumen3')->move('data_form2/', $request->file('nama_dokumen3')->getClientOriginalName());
            $formU4->nama_dokumen = $request->file('nama_dokumen3')->getClientOriginalName();
        }
        $formU4->id_prodi = $request->id_prodi3;
        $formU4->elemen = $request->elemen3;
        $formU4->sub_elemen = $request->sub_elemen3;
        $formU4->keterangan = $request->keterangan3;
        $formU4->save();

        if ($request->hasFile('nama_dokumen4')) {
            $request->file('nama_dokumen4')->move('data_form2/', $request->file('nama_dokumen4')->getClientOriginalName());
            $formU5->nama_dokumen = $request->file('nama_dokumen4')->getClientOriginalName();
        }
        $formU5->id_prodi = $request->id_prodi4;
        $formU5->elemen = $request->elemen4;
        $formU5->sub_elemen = $request->sub_elemen4;
        $formU5->keterangan = $request->keterangan4;
        $formU5->save();

        if ($request->hasFile('nama_dokumen5')) {
            $request->file('nama_dokumen5')->move('data_form2/', $request->file('nama_dokumen5')->getClientOriginalName());
            $formU6->nama_dokumen = $request->file('nama_dokumen5')->getClientOriginalName();
        }
        $formU6->id_prodi = $request->id_prodi5;
        $formU6->elemen = $request->elemen5;
        $formU6->sub_elemen = $request->sub_elemen5;
        $formU6->keterangan = $request->keterangan5;
        $formU6->save();

        if ($request->hasFile('nama_dokumen6')) {
            $request->file('nama_dokumen6')->move('data_form2/', $request->file('nama_dokumen6')->getClientOriginalName());
            $formU7->nama_dokumen = $request->file('nama_dokumen6')->getClientOriginalName();
        }
        $formU7->id_prodi = $request->id_prodi6;
        $formU7->elemen = $request->elemen6;
        $formU7->sub_elemen = $request->sub_elemen6;
        $formU7->keterangan = $request->keterangan6;
        $formU7->save();

        if ($request->hasFile('nama_dokumen7')) {
            $request->file('nama_dokumen7')->move('data_form2/', $request->file('nama_dokumen7')->getClientOriginalName());
            $formU8->nama_dokumen = $request->file('nama_dokumen7')->getClientOriginalName();
        }
        $formU8->id_prodi = $request->id_prodi7;
        $formU8->elemen = $request->elemen7;
        $formU8->sub_elemen = $request->sub_elemen7;
        $formU8->keterangan = $request->keterangan7;
        $formU8->save();

        if ($request->hasFile('nama_dokumen8')) {
            $request->file('nama_dokumen8')->move('data_form2/', $request->file('nama_dokumen8')->getClientOriginalName());
            $formU9->nama_dokumen = $request->file('nama_dokumen8')->getClientOriginalName();
        }
        $formU9->id_prodi = $request->id_prodi8;
        $formU9->elemen = $request->elemen8;
        $formU9->sub_elemen = $request->sub_elemen8;
        $formU9->keterangan = $request->keterangan8;
        $formU9->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');
    }
    public function createC(Request $request)
    {
        dd($request->all());
        // Form2::create($request->all());
        $formU = new \App\Form2();
        $formU2 = new \App\Form2();
        $formU3 = new \App\Form2();
        $formU4 = new \App\Form2();
        $formU5 = new \App\Form2();
        $formU6 = new \App\Form2();
        $formU7 = new \App\Form2();
        $formU8 = new \App\Form2();
        $formU9 = new \App\Form2();
        $formU10 = new \App\Form2();
        $formU11 = new \App\Form2();
        $formU12 = new \App\Form2();
        $formU13 = new \App\Form2();
        $formU14 = new \App\Form2();
        $formU15 = new \App\Form2();
        $formU16 = new \App\Form2();
        $formU17 = new \App\Form2();
        $formU18 = new \App\Form2();
        $formU19 = new \App\Form2();
        $formU20 = new \App\Form2();
        $formU21 = new \App\Form2();
        $formU22 = new \App\Form2();
        if ($request->hasFile('nama_dokumen')) {
            $request->file('nama_dokumen')->move('data_form2/', $request->file('nama_dokumen')->getClientOriginalName());
            $formU->nama_dokumen = $request->file('nama_dokumen')->getClientOriginalName();
        }
        $formU->id_prodi = $request->id_prodi;
        $formU->elemen = $request->elemen;
        $formU->sub_elemen = $request->sub_elemen;
        $formU->keterangan = $request->keterangan;
        $formU->save();

        if ($request->hasFile('nama_dokumen1')) {
            $request->file('nama_dokumen1')->move('data_form2/', $request->file('nama_dokumen1')->getClientOriginalName());
            $formU2->nama_dokumen = $request->file('nama_dokumen1')->getClientOriginalName();
        }
        $formU2->id_prodi = $request->id_prodi1;
        $formU2->elemen = $request->elemen1;
        $formU2->sub_elemen = $request->sub_elemen1;
        $formU2->keterangan = $request->keterangan1;
        $formU2->save();

        if ($request->hasFile('nama_dokumen2')) {
            $request->file('nama_dokumen2')->move('data_form2/', $request->file('nama_dokumen2')->getClientOriginalName());
            $formU3->nama_dokumen = $request->file('nama_dokumen2')->getClientOriginalName();
        }
        $formU3->id_prodi = $request->id_prodi2;
        $formU3->elemen = $request->elemen2;
        $formU3->sub_elemen = $request->sub_elemen2;
        $formU3->keterangan = $request->keterangan2;
        $formU3->save();

        if ($request->hasFile('nama_dokumen3')) {
            $request->file('nama_dokumen3')->move('data_form2/', $request->file('nama_dokumen3')->getClientOriginalName());
            $formU4->nama_dokumen = $request->file('nama_dokumen3')->getClientOriginalName();
        }
        $formU4->id_prodi = $request->id_prodi3;
        $formU4->elemen = $request->elemen3;
        $formU4->sub_elemen = $request->sub_elemen3;
        $formU4->keterangan = $request->keterangan3;
        $formU4->save();

        if ($request->hasFile('nama_dokumen4')) {
            $request->file('nama_dokumen4')->move('data_form2/', $request->file('nama_dokumen4')->getClientOriginalName());
            $formU5->nama_dokumen = $request->file('nama_dokumen4')->getClientOriginalName();
        }
        $formU5->id_prodi = $request->id_prodi4;
        $formU5->elemen = $request->elemen4;
        $formU5->sub_elemen = $request->sub_elemen4;
        $formU5->keterangan = $request->keterangan4;
        $formU5->save();

        if ($request->hasFile('nama_dokumen5')) {
            $request->file('nama_dokumen5')->move('data_form2/', $request->file('nama_dokumen5')->getClientOriginalName());
            $formU6->nama_dokumen = $request->file('nama_dokumen5')->getClientOriginalName();
        }
        $formU6->id_prodi = $request->id_prodi5;
        $formU6->elemen = $request->elemen5;
        $formU6->sub_elemen = $request->sub_elemen5;
        $formU6->keterangan = $request->keterangan5;
        $formU6->save();

        if ($request->hasFile('nama_dokumen6')) {
            $request->file('nama_dokumen6')->move('data_form2/', $request->file('nama_dokumen6')->getClientOriginalName());
            $formU7->nama_dokumen = $request->file('nama_dokumen6')->getClientOriginalName();
        }
        $formU7->id_prodi = $request->id_prodi6;
        $formU7->elemen = $request->elemen6;
        $formU7->sub_elemen = $request->sub_elemen6;
        $formU7->keterangan = $request->keterangan6;
        $formU7->save();

        if ($request->hasFile('nama_dokumen7')) {
            $request->file('nama_dokumen7')->move('data_form2/', $request->file('nama_dokumen7')->getClientOriginalName());
            $formU8->nama_dokumen = $request->file('nama_dokumen7')->getClientOriginalName();
        }
        $formU8->id_prodi = $request->id_prodi7;
        $formU8->elemen = $request->elemen7;
        $formU8->sub_elemen = $request->sub_elemen7;
        $formU8->keterangan = $request->keterangan7;
        $formU8->save();

        if ($request->hasFile('nama_dokumen8')) {
            $request->file('nama_dokumen8')->move('data_form2/', $request->file('nama_dokumen8')->getClientOriginalName());
            $formU9->nama_dokumen = $request->file('nama_dokumen8')->getClientOriginalName();
        }
        $formU9->id_prodi = $request->id_prodi8;
        $formU9->elemen = $request->elemen8;
        $formU9->sub_elemen = $request->sub_elemen8;
        $formU9->keterangan = $request->keterangan8;
        $formU9->save();

        if ($request->hasFile('nama_dokumen9')) {
            $request->file('nama_dokumen9')->move('data_form2/', $request->file('nama_dokumen9')->getClientOriginalName());
            $formU10->nama_dokumen = $request->file('nama_dokumen9')->getClientOriginalName();
        }
        $formU10->id_prodi = $request->id_prodi9;
        $formU10->elemen = $request->elemen9;
        $formU10->sub_elemen = $request->sub_elemen9;
        $formU10->keterangan = $request->keterangan9;
        $formU10->save();

        if ($request->hasFile('nama_dokumen10')) {
            $request->file('nama_dokumen10')->move('data_form2/', $request->file('nama_dokumen10')->getClientOriginalName());
            $formU11->nama_dokumen = $request->file('nama_dokumen10')->getClientOriginalName();
        }
        $formU11->id_prodi = $request->id_prodi10;
        $formU11->elemen = $request->elemen10;
        $formU11->sub_elemen = $request->sub_elemen10;
        $formU11->keterangan = $request->keterangan10;
        $formU11->save();

        if ($request->hasFile('nama_dokumen11')) {
            $request->file('nama_dokumen11')->move('data_form2/', $request->file('nama_dokumen11')->getClientOriginalName());
            $formU12->nama_dokumen = $request->file('nama_dokumen11')->getClientOriginalName();
        }
        $formU12->id_prodi = $request->id_prodi11;
        $formU12->elemen = $request->elemen11;
        $formU12->sub_elemen = $request->sub_elemen11;
        $formU12->keterangan = $request->keterangan11;
        $formU12->save();

        if ($request->hasFile('nama_dokumen12')) {
            $request->file('nama_dokumen12')->move('data_form2/', $request->file('nama_dokumen12')->getClientOriginalName());
            $formU13->nama_dokumen = $request->file('nama_dokumen12')->getClientOriginalName();
        }
        $formU13->id_prodi = $request->id_prodi12;
        $formU13->elemen = $request->elemen12;
        $formU13->sub_elemen = $request->sub_elemen12;
        $formU13->keterangan = $request->keterangan12;
        $formU13->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen13')) {
            $request->file('nama_dokumen13')->move('data_form2/', $request->file('nama_dokumen13')->getClientOriginalName());
            $formU14->nama_dokumen = $request->file('nama_dokumen13')->getClientOriginalName();
        }
        $formU14->id_prodi = $request->id_prodi13;
        $formU14->elemen = $request->elemen13;
        $formU14->sub_elemen = $request->sub_elemen13;
        $formU14->keterangan = $request->keterangan13;
        $formU14->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen14')) {
            $request->file('nama_dokumen14')->move('data_form2/', $request->file('nama_dokumen14')->getClientOriginalName());
            $formU15->nama_dokumen = $request->file('nama_dokumen14')->getClientOriginalName();
        }
        $formU15->id_prodi = $request->id_prodi14;
        $formU15->elemen = $request->elemen14;
        $formU15->sub_elemen = $request->sub_elemen14;
        $formU15->keterangan = $request->keterangan14;
        $formU15->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen15')) {
            $request->file('nama_dokumen15')->move('data_form2/', $request->file('nama_dokumen15')->getClientOriginalName());
            $formU16->nama_dokumen = $request->file('nama_dokumen15')->getClientOriginalName();
        }
        $formU16->id_prodi = $request->id_prodi15;
        $formU16->elemen = $request->elemen15;
        $formU16->sub_elemen = $request->sub_elemen15;
        $formU16->keterangan = $request->keterangan15;
        $formU16->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen16')) {
            $request->file('nama_dokumen16')->move('data_form2/', $request->file('nama_dokumen16')->getClientOriginalName());
            $formU17->nama_dokumen = $request->file('nama_dokumen16')->getClientOriginalName();
        }
        $formU17->id_prodi = $request->id_prodi16;
        $formU17->elemen = $request->elemen16;
        $formU17->sub_elemen = $request->sub_elemen16;
        $formU17->keterangan = $request->keterangan16;
        $formU17->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen17')) {
            $request->file('nama_dokumen17')->move('data_form2/', $request->file('nama_dokumen17')->getClientOriginalName());
            $formU18->nama_dokumen = $request->file('nama_dokumen17')->getClientOriginalName();
        }
        $formU18->id_prodi = $request->id_prodi17;
        $formU18->elemen = $request->elemen17;
        $formU18->sub_elemen = $request->sub_elemen17;
        $formU18->keterangan = $request->keterangan17;
        $formU18->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen18')) {
            $request->file('nama_dokumen18')->move('data_form2/', $request->file('nama_dokumen18')->getClientOriginalName());
            $formU19->nama_dokumen = $request->file('nama_dokumen18')->getClientOriginalName();
        }
        $formU19->id_prodi = $request->id_prodi18;
        $formU19->elemen = $request->elemen18;
        $formU19->sub_elemen = $request->sub_elemen18;
        $formU19->keterangan = $request->keterangan18;
        $formU19->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen19')) {
            $request->file('nama_dokumen19')->move('data_form2/', $request->file('nama_dokumen19')->getClientOriginalName());
            $formU20->nama_dokumen = $request->file('nama_dokumen19')->getClientOriginalName();
        }
        $formU20->id_prodi = $request->id_prodi19;
        $formU20->elemen = $request->elemen19;
        $formU20->sub_elemen = $request->sub_elemen19;
        $formU20->keterangan = $request->keterangan19;
        $formU20->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen20')) {
            $request->file('nama_dokumen20')->move('data_form2/', $request->file('nama_dokumen20')->getClientOriginalName());
            $formU20->nama_dokumen = $request->file('nama_dokumen20')->getClientOriginalName();
        }
        $formU21->id_prodi = $request->id_prodi20;
        $formU21->elemen = $request->elemen20;
        $formU21->sub_elemen = $request->sub_elemen20;
        $formU21->keterangan = $request->keterangan20;
        $formU21->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen21')) {
            $request->file('nama_dokumen21')->move('data_form2/', $request->file('nama_dokumen21')->getClientOriginalName());
            $formU20->nama_dokumen = $request->file('nama_dokumen21')->getClientOriginalName();
        }
        $formU22->id_prodi = $request->id_prodi21;
        $formU22->elemen = $request->elemen21;
        $formU22->sub_elemen = $request->sub_elemen21;
        $formU22->keterangan = $request->keterangan21;
        $formU22->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');
    }
    public function createD(Request $request)
    {
        dd($request->all());
        // Form2::create($request->all());
        $formU = new \App\Form2();
        $formU2 = new \App\Form2();
        $formU3 = new \App\Form2();
        $formU4 = new \App\Form2();
        $formU5 = new \App\Form2();
        $formU6 = new \App\Form2();
        $formU7 = new \App\Form2();
        $formU8 = new \App\Form2();
        $formU9 = new \App\Form2();
        $formU10 = new \App\Form2();
        $formU11 = new \App\Form2();
        $formU12 = new \App\Form2();
        $formU13 = new \App\Form2();
        $formU14 = new \App\Form2();
        $formU15 = new \App\Form2();
        $formU16 = new \App\Form2();
        $formU17 = new \App\Form2();
        $formU18 = new \App\Form2();
        $formU19 = new \App\Form2();
        $formU20 = new \App\Form2();

        if ($request->hasFile('nama_dokumen')) {
            $request->file('nama_dokumen')->move('data_form2/', $request->file('nama_dokumen')->getClientOriginalName());
            $formU->nama_dokumen = $request->file('nama_dokumen')->getClientOriginalName();
        }
        $formU->id_prodi = $request->id_prodi;
        $formU->elemen = $request->elemen;
        $formU->sub_elemen = $request->sub_elemen;
        $formU->keterangan = $request->keterangan;
        $formU->save();

        if ($request->hasFile('nama_dokumen1')) {
            $request->file('nama_dokumen1')->move('data_form2/', $request->file('nama_dokumen1')->getClientOriginalName());
            $formU2->nama_dokumen = $request->file('nama_dokumen1')->getClientOriginalName();
        }
        $formU2->id_prodi = $request->id_prodi1;
        $formU2->elemen = $request->elemen1;
        $formU2->sub_elemen = $request->sub_elemen1;
        $formU2->keterangan = $request->keterangan1;
        $formU2->save();

        if ($request->hasFile('nama_dokumen2')) {
            $request->file('nama_dokumen2')->move('data_form2/', $request->file('nama_dokumen2')->getClientOriginalName());
            $formU3->nama_dokumen = $request->file('nama_dokumen2')->getClientOriginalName();
        }
        $formU3->id_prodi = $request->id_prodi2;
        $formU3->elemen = $request->elemen2;
        $formU3->sub_elemen = $request->sub_elemen2;
        $formU3->keterangan = $request->keterangan2;
        $formU3->save();

        if ($request->hasFile('nama_dokumen3')) {
            $request->file('nama_dokumen3')->move('data_form2/', $request->file('nama_dokumen3')->getClientOriginalName());
            $formU4->nama_dokumen = $request->file('nama_dokumen3')->getClientOriginalName();
        }
        $formU4->id_prodi = $request->id_prodi3;
        $formU4->elemen = $request->elemen3;
        $formU4->sub_elemen = $request->sub_elemen3;
        $formU4->keterangan = $request->keterangan3;
        $formU4->save();

        if ($request->hasFile('nama_dokumen4')) {
            $request->file('nama_dokumen4')->move('data_form2/', $request->file('nama_dokumen4')->getClientOriginalName());
            $formU5->nama_dokumen = $request->file('nama_dokumen4')->getClientOriginalName();
        }
        $formU5->id_prodi = $request->id_prodi4;
        $formU5->elemen = $request->elemen4;
        $formU5->sub_elemen = $request->sub_elemen4;
        $formU5->keterangan = $request->keterangan4;
        $formU5->save();

        if ($request->hasFile('nama_dokumen5')) {
            $request->file('nama_dokumen5')->move('data_form2/', $request->file('nama_dokumen5')->getClientOriginalName());
            $formU6->nama_dokumen = $request->file('nama_dokumen5')->getClientOriginalName();
        }
        $formU6->id_prodi = $request->id_prodi5;
        $formU6->elemen = $request->elemen5;
        $formU6->sub_elemen = $request->sub_elemen5;
        $formU6->keterangan = $request->keterangan5;
        $formU6->save();

        if ($request->hasFile('nama_dokumen6')) {
            $request->file('nama_dokumen6')->move('data_form2/', $request->file('nama_dokumen6')->getClientOriginalName());
            $formU7->nama_dokumen = $request->file('nama_dokumen6')->getClientOriginalName();
        }
        $formU7->id_prodi = $request->id_prodi6;
        $formU7->elemen = $request->elemen6;
        $formU7->sub_elemen = $request->sub_elemen6;
        $formU7->keterangan = $request->keterangan6;
        $formU7->save();

        if ($request->hasFile('nama_dokumen7')) {
            $request->file('nama_dokumen7')->move('data_form2/', $request->file('nama_dokumen7')->getClientOriginalName());
            $formU8->nama_dokumen = $request->file('nama_dokumen7')->getClientOriginalName();
        }
        $formU8->id_prodi = $request->id_prodi7;
        $formU8->elemen = $request->elemen7;
        $formU8->sub_elemen = $request->sub_elemen7;
        $formU8->keterangan = $request->keterangan7;
        $formU8->save();

        if ($request->hasFile('nama_dokumen8')) {
            $request->file('nama_dokumen8')->move('data_form2/', $request->file('nama_dokumen8')->getClientOriginalName());
            $formU9->nama_dokumen = $request->file('nama_dokumen8')->getClientOriginalName();
        }
        $formU9->id_prodi = $request->id_prodi8;
        $formU9->elemen = $request->elemen8;
        $formU9->sub_elemen = $request->sub_elemen8;
        $formU9->keterangan = $request->keterangan8;
        $formU9->save();

        if ($request->hasFile('nama_dokumen9')) {
            $request->file('nama_dokumen9')->move('data_form2/', $request->file('nama_dokumen9')->getClientOriginalName());
            $formU10->nama_dokumen = $request->file('nama_dokumen9')->getClientOriginalName();
        }
        $formU10->id_prodi = $request->id_prodi9;
        $formU10->elemen = $request->elemen9;
        $formU10->sub_elemen = $request->sub_elemen9;
        $formU10->keterangan = $request->keterangan9;
        $formU10->save();

        if ($request->hasFile('nama_dokumen10')) {
            $request->file('nama_dokumen10')->move('data_form2/', $request->file('nama_dokumen10')->getClientOriginalName());
            $formU11->nama_dokumen = $request->file('nama_dokumen10')->getClientOriginalName();
        }
        $formU11->id_prodi = $request->id_prodi10;
        $formU11->elemen = $request->elemen10;
        $formU11->sub_elemen = $request->sub_elemen10;
        $formU11->keterangan = $request->keterangan10;
        $formU11->save();

        if ($request->hasFile('nama_dokumen11')) {
            $request->file('nama_dokumen11')->move('data_form2/', $request->file('nama_dokumen11')->getClientOriginalName());
            $formU12->nama_dokumen = $request->file('nama_dokumen11')->getClientOriginalName();
        }
        $formU12->id_prodi = $request->id_prodi11;
        $formU12->elemen = $request->elemen11;
        $formU12->sub_elemen = $request->sub_elemen11;
        $formU12->keterangan = $request->keterangan11;
        $formU12->save();

        if ($request->hasFile('nama_dokumen12')) {
            $request->file('nama_dokumen12')->move('data_form2/', $request->file('nama_dokumen12')->getClientOriginalName());
            $formU13->nama_dokumen = $request->file('nama_dokumen12')->getClientOriginalName();
        }
        $formU13->id_prodi = $request->id_prodi12;
        $formU13->elemen = $request->elemen12;
        $formU13->sub_elemen = $request->sub_elemen12;
        $formU13->keterangan = $request->keterangan12;
        $formU13->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen13')) {
            $request->file('nama_dokumen13')->move('data_form2/', $request->file('nama_dokumen13')->getClientOriginalName());
            $formU14->nama_dokumen = $request->file('nama_dokumen13')->getClientOriginalName();
        }
        $formU14->id_prodi = $request->id_prodi13;
        $formU14->elemen = $request->elemen13;
        $formU14->sub_elemen = $request->sub_elemen13;
        $formU14->keterangan = $request->keterangan13;
        $formU14->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen14')) {
            $request->file('nama_dokumen14')->move('data_form2/', $request->file('nama_dokumen14')->getClientOriginalName());
            $formU15->nama_dokumen = $request->file('nama_dokumen14')->getClientOriginalName();
        }
        $formU15->id_prodi = $request->id_prodi14;
        $formU15->elemen = $request->elemen14;
        $formU15->sub_elemen = $request->sub_elemen14;
        $formU15->keterangan = $request->keterangan14;
        $formU15->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen15')) {
            $request->file('nama_dokumen15')->move('data_form2/', $request->file('nama_dokumen15')->getClientOriginalName());
            $formU16->nama_dokumen = $request->file('nama_dokumen15')->getClientOriginalName();
        }
        $formU16->id_prodi = $request->id_prodi15;
        $formU16->elemen = $request->elemen15;
        $formU16->sub_elemen = $request->sub_elemen15;
        $formU16->keterangan = $request->keterangan15;
        $formU16->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen16')) {
            $request->file('nama_dokumen16')->move('data_form2/', $request->file('nama_dokumen16')->getClientOriginalName());
            $formU17->nama_dokumen = $request->file('nama_dokumen16')->getClientOriginalName();
        }
        $formU17->id_prodi = $request->id_prodi16;
        $formU17->elemen = $request->elemen16;
        $formU17->sub_elemen = $request->sub_elemen16;
        $formU17->keterangan = $request->keterangan16;
        $formU17->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen17')) {
            $request->file('nama_dokumen17')->move('data_form2/', $request->file('nama_dokumen17')->getClientOriginalName());
            $formU18->nama_dokumen = $request->file('nama_dokumen17')->getClientOriginalName();
        }
        $formU18->id_prodi = $request->id_prodi17;
        $formU18->elemen = $request->elemen17;
        $formU18->sub_elemen = $request->sub_elemen17;
        $formU18->keterangan = $request->keterangan17;
        $formU18->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen18')) {
            $request->file('nama_dokumen18')->move('data_form2/', $request->file('nama_dokumen18')->getClientOriginalName());
            $formU19->nama_dokumen = $request->file('nama_dokumen18')->getClientOriginalName();
        }
        $formU19->id_prodi = $request->id_prodi18;
        $formU19->elemen = $request->elemen18;
        $formU19->sub_elemen = $request->sub_elemen18;
        $formU19->keterangan = $request->keterangan18;
        $formU19->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');

        if ($request->hasFile('nama_dokumen19')) {
            $request->file('nama_dokumen19')->move('data_form2/', $request->file('nama_dokumen19')->getClientOriginalName());
            $formU20->nama_dokumen = $request->file('nama_dokumen19')->getClientOriginalName();
        }
        $formU20->id_prodi = $request->id_prodi19;
        $formU20->elemen = $request->elemen19;
        $formU20->sub_elemen = $request->sub_elemen19;
        $formU20->keterangan = $request->keterangan19;
        $formU20->save();
        return redirect('/form2')->with('sukses', 'Data Ditambahkan');
    }
    // public function update(Request $request, $id)
    // {
    //     dd($request->all());

    //     $form2 = \App\Form2::find($id);
    //     $form2->update($request->all());
    //     $form2->elemen = $request->elemen;
    //     $form2->sub_elemen = $request->sub_elemen;
    //     $form2->nama_dokumen = $request->nama_dokumen;
    //     $form2->keterangan = $request->keterangan;

    //     $form2->save();
    //     return redirect('/form2')->with('sukses', 'Data Ditambahkan');

    //     // Form2::find($request->pk)->update([$request->name => $request->value]);
    //     // return response()->json(['success' => 'done']);
    // }
    // public function delete($id)
    // {
    //     $form2 = \App\Form2::find($id);
    //     $form2->delete($form2);
    //     return redirect('/form2')->with('sukses', 'Data sukses dihapus');
    // }
}
