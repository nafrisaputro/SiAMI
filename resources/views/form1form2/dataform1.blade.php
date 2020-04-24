@extends('layouts.form1form2')

@section('dataform1')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Data</a></li>
      <li class="breadcrumb-item active">Data Form 1</li>
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
           <h4 >Form 1 Audit Checklist
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahform1">
              <i class="fa fa-plus"></i> Tambah 
            </button>
          </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
           <table id="data1" class="table table-bordered">
             <thead style="text-align: center">
              <tr>
                <th>No</th>
                <th>Ruang Lingkup</th>
                <th>Sub Ruang Lingkup</th>
                <th width="260px">Pertanyaan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($table_form1 as $form1)
              <tr>
                <td>{{$form1->no}}</td>
                <td>{{$form1->ruang_lingkup}}</td>
                <td>{{$form1->sub_ruang_lingkup}}</td>
                <td>{!! $form1->pertanyaan !!}</td>
                <td>
                  <a href="/form1form2/{{$form1->id_form1}}/edit" class="btn btn-info btn-sm"> <i class="fa fa-pencil"></i> Edit</a>
              <!--    <button type="button" class="btn btn-info btn-sm" data-myno="{{$form1->no}}" data-mypertanyaan="{{$form1->pertanyaan}}" data-mysub="{{$form1->sub_ruang_lingkup}}" data-mylingkup="{{$form1->ruang_lingkup}}" data-toggle="modal" data-target="#editform1"><i class="fa fa-pencil"></i> Edit 
                </button> -->
                <a href="/form1form2/{{$form1->id_form1}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"> <i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>

<div class="modal fade" id="tambahform1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 600px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Form 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/form1form2/create" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleFormControlSelect1">Ruang Lingkup</label>
            <select name="lingkup" class="form-control" id="lingkup" >
              <option value="">Pilih Ruang Lingkup</option>
              <option value="A.KONDISI EKSTERNAL">A. KONDISI EKSTERNAL</option>
              <option value="B.PROFIL INSTITUSI">B. PROFIL INSTITUSI</option>
              <option value="C.KRITERIA">C. KRITERIA</option>
              <option value="D.ANALISIS DAN PENETAPAN PROGRAM PENGEBANGAN">D. ANALISIS DAN PENETAPAN PROGRAM PENGEBANGAN</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No Sub Ruang Lingkup</label>
            <input name="no" type="text" class="form-control" id="no" aria-describedby="emailHelp" placeholder="Masukan Nomor Sub Ruang Lingkup" required="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Sub Ruang Lingkup</label>
            <select name="sub" class="form-control" id="sub">
             <option value="">Pilih Sub Ruang Lingkup</option>
             <option value="-">-</option>
             <option value="1.VISI, MISI, TUJUAN, STRATEGI">1. VISI, MISI, TUJUAN, STRATEGI</option>
             <option value="2.TATA PAMONG, TATA KELOLA, DAN KERJASAMA">2. TATA PAMONG, TATA KELOLA, DAN KERJASAMA</option>
             <option value="3.MAHASISWA">3. MAHASISWA</option>
             <option value="4.SUMBER DAYA MANUSIA">4. SUMBER DAYA MANUSIA</option>
             <option value="5.KEUANGAN, SARANA PRASARANA">5. KEUANGAN, SARANA PRASARANA</option>
             <option value="6.PENDIDIKAN">6. PENDIDIKAN</option>
             <option value="7.PENELITIAN">7. PENELITIAN</option>
             <option value="8.PENGABDIAN KEPADA MASYARAKAT">8. PENGABDIAN KEPADA MASYARAKAT</option>
             <option value="9.LUARAN DAN CAPAIAN TRIDHARMA">9. LUARAN DAN CAPAIAN TRIDHARMA</option>
           </select>
         </div>
         <div class="form-group">
          <label for="pertanyaan">Pertanyaan</label>
          <textarea id="pertanyaan" name="pertanyaan"  placeholder="Masukan Pertanyaan" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
</div>

<!-- <div class="modal fade" id="editform1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 600px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Form 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/form1form2/{{$form1->id_form1}}/edit" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleFormControlSelect1">Ruang Lingkup</label>
            <select name="lingkup" class="form-control" id="lingkup" >
              <option value="">Pilih Ruang Lingkup</option>
              <option value="A.KONDISI EKSTERNAL">A. KONDISI EKSTERNAL</option>
              <option value="B.PROFIL INSTITUSI">B. PROFIL INSTITUSI</option>
              <option value="C.KRITERIA">C. KRITERIA</option>
              <option value="D.ANALISIS DAN PENETAPAN PROGRAM PENGEBANGAN">D. ANALISIS DAN PENETAPAN PROGRAM PENGEBANGAN</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No Sub Ruang Lingkup</label>
            <input name="no" type="text" class="form-control" id="no" aria-describedby="emailHelp" placeholder="Masukan Nomor Sub Ruang Lingkup" required="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Sub Ruang Lingkup</label>
            <select name="sub" class="form-control" id="sub">
             <option value="">Pilih Sub Ruang Lingkup</option>
             <option value="-">-</option>
             <option value="1.VISI, MISI, TUJUAN, STRATEGI">1. VISI, MISI, TUJUAN, STRATEGI</option>
             <option value="2.TATA PAMONG, TATA KELOLA, DAN KERJASAMA">2. TATA PAMONG, TATA KELOLA, DAN KERJASAMA</option>
             <option value="3.MAHASISWA">3. MAHASISWA</option>
             <option value="4.SUMBER DAYA MANUSIA">4. SUMBER DAYA MANUSIA</option>
             <option value="5.KEUANGAN, SARANA PRASARANA">5. KEUANGAN, SARANA PRASARANA</option>
             <option value="6.PENDIDIKAN">6. PENDIDIKAN</option>
             <option value="7.PENELITIAN">7. PENELITIAN</option>
             <option value="8.PENGABDIAN KEPADA MASYARAKAT">8. PENGABDIAN KEPADA MASYARAKAT</option>
             <option value="9.LUARAN DAN CAPAIAN TRIDHARMA">9. LUARAN DAN CAPAIAN TRIDHARMA</option>
           </select>
         </div>
         <div class="form-group">
          <label for="pertanyaan2">Pertanyaan</label>
          <textarea id="pertanyaan2" name="pertanyaan2"  placeholder="Masukan Pertanyaan" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</div>
</div> -->

@endsection