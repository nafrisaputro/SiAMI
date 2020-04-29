<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class Form1form2Controller extends Controller
{
    // ------------------------form 1 form2 index----------------------------
    public function index()
    {
        $table_form1 = \App\Form1::all();
        $table_form2 = \App\Form2::all();
        return view('form1form2.index', ['table_form1' => $table_form1], ['table_form2' => $table_form2]);
    }

    // ------------------------data form 1----------------------------
    public function dataform1()
    {
        $table_form1 = \App\Form1::all();
        return view('form1form2.dataform1', ['table_form1' => $table_form1]);
    }
    public function create(Request $request)
    {
        $form1 = new \App\Form1;
        $form1->no = $request->no;
        $form1->ruang_lingkup = $request->lingkup;
        $form1->sub_ruang_lingkup = $request->sub;
        $form1->pertanyaan = $request->pertanyaan;
        $form1->save();

        return redirect('/form1form2/dataform1')->with('sukses', 'Data sukses ditambahkan');
    }
    public function edit($id_form1)
    {
        $table_form1 = \App\Form1::find($id_form1);
        // dd($table_form1);
        return view('/form1form2/editdataform1', ['table_form1' => $table_form1]);
    }
    public function update(Request $request, $id_form1)
    {
        $form1 = \App\Form1::find($id_form1);
        $form1->update($request->all());
        return redirect('/form1form2/dataform1')->with('sukses', 'Data sukses diupdate');
    }
    public function delete($id_form1)
    {
        $form1 = \App\Form1::find($id_form1);
        $form1->delete($form1);
        return redirect('/form1form2/dataform1')->with('sukses', 'Data sukses dihapus');
    }
    // ------------------------data form 2----------------------------
    public function dataform2()
    {
        $table_form2 = \App\Form2::all();
        return view('form1form2.dataform2', ['table_form2' => $table_form2]);
    }
    public function create2(Request $request)
    {
        $form2 = new \App\Form2;
        $form2->no = $request->no;
        $form2->elemen = $request->elemen;
        $form2->sub_elemen = $request->sub;
        $form2->nama_dokumen = $request->dokumen;
        $form2->keterangan = $request->keterangan;
        $form2->save();

        return redirect('/form1form2/dataform2')->with('sukses', 'Data sukses ditambahkan');
    }
    public function delete2($id_form2)
    {
        $form2 = \App\Form2::find($id_form2);
        $form2->delete($form2);
        return redirect('/form1form2/dataform2')->with('sukses', 'Data sukses dihapus');
    }
    public function download($id)
    {
        // $dl = \App\Form2::find($id);
        // return  Storage::download($dl->data_form2, $dl->title);

        return response()->download('data_form2/' . $id);
    }
}
