@extends('layouts.form1form2')

@section('editdataform1')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Data</a></li>
      <li class="breadcrumb-item active">Edit Data Form 1</li>
    </ul>
  </div>
</div>
<section>
  <div class="container-fluid">
    <header>
      <h1 class="h1 display">Data Form 1</h1>
    </header>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
         <div class="card-header">
           <h4 >Edit Data Form 1
          </h4>
        </div>
        <div class="card-body">
          <form action="/form1form2/{{$table_form1->id_form1}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">No Ruang Lingkup</label>
              <input id="no" name="no" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukan Nomor Ruang Lingkup" value="{{$table_form1->no}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Ruang Lingkup</label>
              <select name="lingkup" class="form-control" id="lingkup">
                <option value="">Pilih Ruang Lingkup</option>
                <option value="A.KONDISI EKSTERNAL" @if($table_form1->ruang_lingkup == "A.KONDISI EKSTERNAL") selected @endif>A.KONDISI EKSTERNAL</option>
                <option value="B.PROFIL INSTITUSI" @if($table_form1->ruang_lingkup == "B.PROFIL INSTITUSI") selected @endif>B.PROFIL INSTITUSI</option>
                <option value="C.KRITERIA" @if($table_form1->ruang_lingkup == "C.KRITERIA") selected @endif>C.KRITERIA</option>
                <option value="D.ANALISIS DAN PENETAPAN PROGRAM PENGEBANGAN" @if($table_form1->ruang_lingkup == "D.ANALISIS DAN PENETAPAN PROGRAM PENGEBANGAN") selected @endif>D.ANALISIS DAN PENETAPAN PROGRAM PENGEBANGAN</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Sub Ruang Lingkup</label>
              <select name="sub" class="form-control" id="sub">
                <option value="">Pilih Sub Ruang Lingkup</option>
                <option value="-" @if($table_form1->sub_ruang_lingkup == "-") selected @endif>-</option>
                <option value="1.VISI, MISI, TUJUAN, STRATEGI" @if($table_form1->sub_ruang_lingkup == "1.VISI, MISI, TUJUAN, STRATEGI") selected @endif>1.VISI, MISI, TUJUAN, STRATEGI</option>
                <option value="2.TATA PAMONG, TATA KELOLA, DAN KERJASAMA" @if($table_form1->sub_ruang_lingkup == "2.TATA PAMONG, TATA KELOLA, DAN KERJASAMA") selected @endif>2.TATA PAMONG, TATA KELOLA, DAN KERJASAMA</option>
                <option value="3.MAHASISWA" @if($table_form1->sub_ruang_lingkup == "3.MAHASISWA") selected @endif>3.MAHASISWA</option>
                <option value="4.SUMBER DAYA MANUSIA" @if($table_form1->sub_ruang_lingkup == "4.SUMBER DAYA MANUSIA") selected @endif>4.SUMBER DAYA MANUSIA</option>
                <option value="5.KEUANGAN, SARANA PRASARANA" @if($table_form1->sub_ruang_lingkup == "5.KEUANGAN, SARANA PRASARANA") selected @endif>5.KEUANGAN, SARANA PRASARANA</option>
                <option value="6.PENDIDIKAN" @if($table_form1->sub_ruang_lingkup == "6.PENDIDIKAN") selected @endif>6.PENDIDIKAN</option>
                <option value="7.PENELITIAN" @if($table_form1->sub_ruang_lingkup == "7.PENELITIAN") selected @endif>7.PENELITIAN</option>
                <option value="8.PENGABDIAN KEPADA MASYARAKAT" @if($table_form1->sub_ruang_lingkup == "8.PENGABDIAN KEPADA MASYARAKAT") selected @endif>8.PENGABDIAN KEPADA MASYARAKAT</option>
                <option value="9.LUARAN DAN CAPAIAN TRIDHARMA" @if($table_form1->sub_ruang_lingkup == "9.LUARAN DAN CAPAIAN TRIDHARMA") selected @endif>9.LUARAN DAN CAPAIAN TRIDHARMA</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pertanyaan">Pertanyaan</label>
              <textarea id="pertanyaan" name="pertanyaan" placeholder="Masukan Pertanyaan" required>{{ $table_form1->pertanyaan }}
              </textarea>
            </div>
          </div>
          <div class="modal-footer">
            <a href="{{ URL::previous()}}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
            <button type="submit" class="btn btn-info">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection