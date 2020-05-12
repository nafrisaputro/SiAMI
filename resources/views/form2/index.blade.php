@extends('layouts.form2')

@section('form2')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Perbaikan</a></li>
            <li class="breadcrumb-item active">Form 2 Daftar Kelengkapan Dokumen</li>
        </ul>
    </div>
</div>
<section>
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h3 display">Upload File Pendukung
                        </h3>
                    </div>
                    <!-- Tab links -->
                    <div class="card-body">
                        @foreach($jadwal as $jdwl)
                        <table class="table table-bordered">
                            <thead style="text-align: center">
                                <tr>
                                    <th colspan="6">Auditi</th>
                                    <th colspan="4">Tahap Audit</th>
                                </tr>
                            </thead>
                            <tr>
                                <td colspan="6">{{$jdwl->auditi}}</td>
                                <td colspan="4">{!! $jdwl->tahap_audit !!}</td>
                            </tr>
                            <thead style="text-align: center">
                                <tr>
                                    <th colspan="2">Lokasi</th>
                                    <th colspan="4">Ruang Lingkup</th>
                                    <th colspan="4">Tanggal Audit</th>
                                </tr>
                            </thead>
                            <tr>
                                <td colspan="2">{{$jdwl->nama_prodi}}</td>
                                <td colspan="4">{!! $jdwl->ruang_lingkup !!}</td>
                                <td colspan="4">{{date('d F Y', strtotime($jdwl->tgl_audit))}}</td>
                            </tr>
                            <thead style="text-align: center">
                                <tr>
                                    <th colspan="2">Wakil Auditi</th>
                                    <th colspan="4">Auditor Ketua</th>
                                    <th colspan="4">Auditor Anggota</th>
                                </tr>
                            </thead>
                            <tr>
                                <td colspan="2">{{$jdwl->wakil_auditi}}</td>
                                <td colspan="4">{{$jdwl->auditor_ketua}}</td>
                                <td colspan="4">{{$jdwl->auditor_anggota}}</td>
                                <!--  <td colspan="2">{{$jdwl->auditor_anggota}}</td>
                      <td colspan="2"></td> -->
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="4"></td>
                                <td colspan="4"></td>
                                <!--    <td colspan="2"></td>
                      <td colspan="2"></td> -->
                            </tr>
                            <thead style="text-align: center">
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
                            </thead>
                        </table>
                        @endforeach

                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'A')">A.Analisis SWOT</button>
                            <button class="tablinks" onclick="openCity(event, 'B')">Visi, Misi, Tujuan dan Sasaran</button>
                            <button class="tablinks" onclick="openCity(event, 'C')">Tata Pamong</button>
                            <button class="tablinks" onclick="openCity(event, 'D')">Sistem Manajemen Mutu</button>
                            <button class="tablinks" onclick="openCity(event, 'E')">Kerja Sama</button>
                            <button class="tablinks" onclick="openCity(event, 'F')">Manajemen Sumberdaya</button>
                            <button class="tablinks" onclick="openCity(event, 'G')">Pelaksanaan Proses</button>
                            <button class="tablinks" onclick="openCity(event, 'H')">Pengukuran, Analisis dan Perbaikan</button>
                        </div>
                    </div>
                    <!-- Tab content -->
                    {{-- Analisis SWOT --}}
                    <div id="A" class="tabcontent">
                        <div class="box box-primary">
                            <form action="/form2/createA" method="POST" enctype="multipart/form-data" id="form1">
                                {{csrf_field()}}
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen" value="A.Analisis SWOT" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen" value="Analisis Kondisis Eksternal" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi1" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen1" value="A.Analisis SWOT" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen1" value="Profil Prodi" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen1" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan1">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </form>
                        </div>
                    </div>

                    {{--VIsi, Misi, Tujuan dan Sasaran--}}
                    <div id="B" class="tabcontent">
                        <div class="box box-primary">
                            <form action="/form2/createB" method="POST" enctype="multipart/form-data" id="form1">
                                {{csrf_field()}}
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen" value="VIsi, Misi, Tujuan dan Sasaran" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen" value="Pernyataan Visi, Misi, Tujuan dan Sasaran" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi1" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen1" value="VIsi, Misi, Tujuan dan Sasaran" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen1" value="Tahapan penyusunan Visi, Misi, Tujuan dan Sasaran" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen1" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan1">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi2" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen2" value="VIsi, Misi, Tujuan dan Sasaran" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen2" value="Rencana Jangka Panjang" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen2" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan2">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi3" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen3" value="VIsi, Misi, Tujuan dan Sasaran" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen3" value="Rencana Jangka Menengah" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen3" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan3">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi4" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen4" value="VIsi, Misi, Tujuan dan Sasaran" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen4" value="Rencana Jangka Pendek" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen4" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan4">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi5" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen5" value="VIsi, Misi, Tujuan dan Sasaran" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen5" value="Indikator Kinerja" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen5" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan5">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi6" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen6" value="VIsi, Misi, Tujuan dan Sasaran" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen6" value="Sosialisasi" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen6" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan6">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi7" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen7" value="VIsi, Misi, Tujuan dan Sasaran" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen7" value="Dokumentasi aktivitas penyusunan Visi, Misi, Tujuan dan Sasaran" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen7" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan7">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi8" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen8" value="VIsi, Misi, Tujuan dan Sasaran" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen8" value="Dokumentasi aktivitas" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen8" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan8">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </form>
                        </div>
                    </div>

                    {{--TATA PAMONG--}}
                    <div id="C" class="tabcontent">
                        <div class="box box-primary">
                            <form action="/form2/createC" method="POST" enctype="multipart/form-data" id="form1">
                                {{csrf_field()}}
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen" value="Sistem Tata Pamong / OTK" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi1" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen1" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen1" value="SK penetapan pembentukan Jurusan/Prodi/Unit" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen1" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan1">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi2" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen2" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen2" value="SK Pengangkatan Personil" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen2" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan2">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi3" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen3" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen3" value="Struktur Organisasi" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen3" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan3">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi4" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen4" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen4" value="Tupoksi, Tanggung Jawab, Wewenang" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen4" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan4">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi5" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen5" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen5" value="Renstra" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen5" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan5">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi6" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen6" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen6" value="Renja" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen6" type="file" class="form-control" accept="application/pdf" id="nama_dokumen6">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan6">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi7" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen7" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen7" value="RAB" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen7" type="file" class="form-control" accept="application/pdf" id="nama_dokumen7">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan7">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi8" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen8" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen8" value="Indikator Kinerja" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen8" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan8">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi9" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen9" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen9" value="Kode Etik" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen9" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan9">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi10" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen10" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen10" value="Analisis / Mitigasi Resiko" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen10" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan10">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi11" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen3" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen11" value="Notulensi Rapat" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen11" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan11">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi12" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen12" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen12" value="Pengumuman2" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen12" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan12">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi13" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen13" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen13" value="Dokumentasi Kegiatan" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen13" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan13">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi14" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen14" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <textarea type="text" id="sub_elemen" class="form-control" name="sub_elemen14" readonly>Pedoman akademik (pendidikan, pengembangan suasana akademik dan otonomi keilmuan)</textarea>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen14" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan14">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi15" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen15" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen15" value="Pedoman kemahasiswaan" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen15" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan15">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi16" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen16" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen16" value="Pedoman penelitian dan PkM" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen16" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan16">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi17" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen17" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen17" value="Pedoman Pengembangan SDM" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen17" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan17">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi18" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen18" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen18" value="Pedoman keuangan, sarana dan prasarana" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen18" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan18">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi19" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen19" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen19" value="Pedoman sistem informasi" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen19" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan19">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi20" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen20" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen20" value="Pedoman kerjasama eksternal" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen20" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan20">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi21" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen21" value="Tata Pamong" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <textarea type="text" id="sub_elemen" class="form-control" name="sub_elemen21" readonly>Dokumen bukti implementasi / pelaksanaan pedoman – pedoman pengelolaan</textarea>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen21" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan21">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </form>
                        </div>
                    </div>

                    {{--Sistem Manajemen Mutu--}}
                    <div id="D" class="tabcontent">
                        <div class="box box-primary">
                            <form action="/form2/createC" method="POST" enctype="multipart/form-data" id="form1">
                                {{csrf_field()}}
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen" value="SK Pembentukan Struktur Organisasi SPMI, GPM dan GKM" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi1" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen1" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen1" value="SK Tupoksi personalia Struktur Organisasi SPMI, GPM dan GKM" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen1" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan1">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi2" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen2" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" value="SK Penunjukan Personalia Organisasi SPMI, GPM dan GKM" name="sub_elemen2" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen2" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan2">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi3" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen3" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen3" value="SK penunjukan Auditor Internal" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen3" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan3">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi4" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen4" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen4" value="Kebijakan Mutu Akademik" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen4" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan4">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi5" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen5" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen5" value="Sasaran Mutu Akademik" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen5" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan5">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi6" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen6" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen6" value="Manual Mutu" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen6" type="file" class="form-control" accept="application/pdf" id="nama_dokumen6">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan6">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi7" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen7" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen7" value="Kompetensi Lulusan" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen7" type="file" class="form-control" accept="application/pdf" id="nama_dokumen7">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan7">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi8" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen8" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <textarea type="text" id="sub_elemen" class="form-control" name="sub_elemen8" readonly>Indikator kinerja tambahan yang melampaui SN-DIKTI yang ditetapkan oleh Jurusan/Prodi pada tiap kriteria.</textarea>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen8" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan8">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi9" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen9" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen9" value="Peraturan Akademik" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen9" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan9">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi10" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen10" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen10" value="Analisis / Mitigasi Resiko" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen10" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan10">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi11" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen3" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <textarea type="text" id="sub_elemen" class="form-control" name="sub_elemen11" readonly>Bukti yang sahih terkait praktek baik pengembangan budaya mutu di perguruan tinggi</textarea>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen11" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan11">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi12" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen12" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <textarea type="text" id="sub_elemen" class="form-control" name="sub_elemen12" readonly>Analisis keberhasilan dan/atau ketidakberhasilan pencapaian kinerja yang telah ditetapkan institusi yang</textarea>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen12" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan12">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi13" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen13" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <textarea rows="10" cols="50" type="text" id="sub_elemen" class="form-control" name="sub_elemen13" readonly>Pengukuran kepuasan pemangku kepentingan internal dan eksternal pada masing-masing kriteria:
-	Tata pamong dan kerjasama, 
-	Mahasiswa, 
-	Sumber daya manusia, 
-	Keuangan, 
-	Sarana dan prasarana, 
-	Pendidikan, 
-	Penelitian
-	Pengabdian kepada masyarakat
</textarea>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen13" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan13">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi14" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen14" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen14" value="Kajian Manajemen dan Perbaikan" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen14" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan14">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi15" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen15" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen15" value="Akreditasi A BANPT" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen15" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan15">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi16" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen16" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen16" value="Akreditasi institusi berskala internasional" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen16" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan16">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi17" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen17" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen17" value="Hasil Audit Keuangan dari Kantor Akuntan Publik WTP" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen17" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan17">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi18" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen18" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen18" value="Catatan Mutu" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen18" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan18">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi19" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen19" value="Sistem Manajemen Mutu" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen19" value="Struktur Organisasi SPMI, GPM dan GKM" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen19" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan19">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </form>
                        </div>
                    </div>

                    {{--Sistem Manajemen Mutu--}}
                    <div id="E" class="tabcontent">
                        <div class="box box-primary">
                            <form action="/form2/createA" method="POST" enctype="multipart/form-data" id="form1">
                                {{csrf_field()}}
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen" value="A.Analisis SWOT" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen" value="Analisis Kondisis Eksternal" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi1" value="{{auth()->user()->prodi->id_prodi}}" hidden>
                                    <input type="text" id="elemen" class="form-control" name="elemen1" value="A.Analisis SWOT" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen1" value="Profil Prodi" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen1" type="file" class="form-control" accept="application/pdf" id="nama_dokumen1">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan1">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </form>
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
                <h5 class="modal-title" id="exampleModalLabel">Unggah File Pendukung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/form2/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID Prodi</label>
                        <input type="text" id="id_prodi" class="form-control" name="id_prodi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Elemen</label>
                        <input type="text" id="elemen" class="form-control" name="elemen" value="A.Analisis SWOT" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub Elemen</label>
                        <!-- <input name="sub_elemen" type="text" class="form-control" id="sub_elemen"> -->
                        <select name="sub_elemen" class="form-control">
                            @foreach($formA as $form2A)
                            <option value="{{$form2A->sub_elemen}}">{{$form2A->sub_elemen}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                        <input name="nama_dokumen" type="file" class="form-control" accept="application/pdf" id="nama_dokumen" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keterangan</label>
                        <textarea name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan" rows="3"></textarea>
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