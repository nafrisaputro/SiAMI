@extends('layouts.form2')

@section('form2')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<section>
    <div class="container-fluid">
        <header>
            <h1 class="h1 display">Data Form 2</h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h1 display">Upload File Pendukung
                        </h1>
                    </div>
                    <!-- Tab links -->
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

                    <!-- Tab content -->
                    <div id="A" class="tabcontent">
                        <div class="box box-primary">
                            <form action="/form2/createA" method="POST" enctype="multipart/form-data" id="form1">
                                {{csrf_field()}}
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi1" value="{{auth()->user()->prodi->id}}" hidden>
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

                    <div id="B" class="tabcontent">
                        <div class="box box-primary">
                            <form action="/form2/createB" method="POST" enctype="multipart/form-data" id="form1">
                                {{csrf_field()}}
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi1" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi2" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi3" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi4" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi5" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi6" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi7" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi8" value="{{auth()->user()->prodi->id}}" hidden>
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

                    <div id="C" class="tabcontent">
                        <div class="box box-primary">
                            <form action="/form2/createA" method="POST" enctype="multipart/form-data" id="form1">
                                {{csrf_field()}}
                                <br>
                                <div class="form-row">
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi" value="{{auth()->user()->prodi->id}}" hidden>
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
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi1" value="{{auth()->user()->prodi->id}}" hidden>
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


@endsection