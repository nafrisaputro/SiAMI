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
                            <form action="/form2/create" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-row">
                                    @foreach($prodi as $prodi)
                                    <input type="text" id="id_prodi" class="form-control" name="id_prodi" value="{{$prodi->id}}" hidden>
                                    @endforeach
                                    <input type="text" id="elemen" class="form-control" name="elemen" value="A.Analisis SWOT" hidden>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Sub Elemen</label>
                                        <input type="text" id="sub_elemen" class="form-control" name="sub_elemen" value="Analisis Kondisis Eksternal" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1">Dokumen Pendukung</label>
                                        <input name="nama_dokumen" type="file" class="form-control" accept="application/pdf" id="nama_dokumen">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" id="keterangan" class="form-control" name="keterangan">

                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection