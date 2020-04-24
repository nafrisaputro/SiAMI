@extends('layouts.form1form2')

@section('dataform2')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Data</a></li>
      <li class="breadcrumb-item active">Data Form 2</li>
    </ul>
  </div>
</div>
<section>
  <div class="container-fluid">
    <header>
      <h1 class="h1 display">Data Form 2</h1>
    </header>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 >Form 2 Daftar kelengkapan Dokumen
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> Tambah 
              </button>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead style="text-align: center">
                <tr>
                  <th colspan="6">Auditi</th>
                  <th colspan="4">Tahap Audit</th>
                </tr>
                <tr>
                  <td colspan="6"></td>
                  <td colspan="4"></td>
                </tr>
                <tr>
                  <th colspan="2">Lokasi</th>
                  <th colspan="4">Ruang Lingkup</th>
                  <th colspan="4">Tanggal Audit</th>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td colspan="4"></td>
                  <td colspan="4"></td>
                </tr>
                <tr>
                  <th colspan="2">Wakil Auditi</th>
                  <th colspan="4">Auditor Ketua</th>
                  <th colspan="4">Auditor Anggota</th>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td colspan="4"></td>
                  <td colspan="2"></td>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td colspan="4"></td>
                  <td colspan="2"></td>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <th colspan="2">Distribusi</th>
                  <th>Auditi</th>
                  <th></th>
                  <th>Auditor</th>
                  <th></th>
                  <th>KJM</th>
                  <th></th>
                  <th>Arsip</th>
                  <th></th>
                </tr>
              </thead>
            </table>
            <div class="table-responsive">
              <table id="data2" class="table table-bordered">
                <thead style="text-align: center">
                  <tr>
                    <th>No</th>
                    <th>Elemen</th>
                    <th>Sub Elemen</th>
                    <th>Nama Dokumen</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($table_form2 as $form2)
                  <tr>
                    <td>{{$form2->no}}</td>
                    <td>{{$form2->elemen}}</td>
                    <td>{{$form2->sub_elemen}}</td>
                    <td>{{$form2->nama_dokumen}}</td>
                    <td>{{$form2->keterangan}}</td>
                    <td>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModalLabel"><i class="fa fa-pencil"></i>
                      Edit
                    </button>
                    <a href="/form1form2/{{$form2->id_form2}}/delete2" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"> <i class="fa fa-trash"></i> Hapus</a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data form 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/form1form2/create2" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleFormControlSelect1">Elemen</label>
            <select name="elemen" class="form-control" id="exampleFormControlSelect1">
             <option value="">Pilih Elemen</option>
                    <!--      @foreach($table_form2 as $form2 )
                        <option value="{{$form2->elemen}}">{{$form2->elemen}}</option>
                        @endforeach -->
                        <option value="A.Analisis SWOT">A. Analisis SWOT</option>
                        <option value="B.Visi, Misi, Tujuan dan Sasaran">B. Visi, Misi, Tujuan dan Sasaran</option>
                        <option value="C.Tata Pamong">C. Tata Pamong</option>
                        <option value="D.Sistem Manajemen Mutu">D. Sistem Manajemen Mutu</option>
                        <option value="E.Kerja Sama">E. Kerja Sama</option>
                        <option value="F.Manajemen Sumberdaya">F. Manajemen Sumberdaya</option>
                        <option value="G.Pelaksanaan Proses">G. Pelaksanaan Proses</option>
                        <option value="H.Pengukuran, Analisis dan Perbaikan">H. Pengukuran, Analisis dan Perbaikan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No</label>
                      <input name="no" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Sub Elemen">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sub Elemen</label>
                      <input name="sub" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Sub Elemen">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Dokumen</label>
                      <input name="dokumen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Dokumen">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Keterangan</label>
                      <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Keterangan">
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


          @endsection