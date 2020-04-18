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
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class=""><a href="#tab_1" data-toggle="tab" aria-expanded="false"><button type="button" class="btn btn-primary">A.Analisis SWOT</button></a></li>
                                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><button type="button" class="btn btn-primary">Visi, Misi, Tujuan dan Sasaran</button></a></li>
                                    <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false"><button type="button" class="btn btn-primary">Tata Pamong</button></a></li>
                                    <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false"><button type="button" class="btn btn-primary">Sistem Manajemen Mutu</button></a></li>
                                    <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false"><button type="button" class="btn btn-primary">Kerja Sama</button></a></li>
                                    <li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false"><button type="button" class="btn btn-primary">Manajemen Sumberdaya</button></a></li>
                                    <li class=""><a href="#tab_7" data-toggle="tab" aria-expanded="false"><button type="button" class="btn btn-primary">Pelaksanaan Proses</button></a></li>
                                    <li class=""><a href="#tab_8" data-toggle="tab" aria-expanded="false"><button type="button" class="btn btn-primary">Pengukuran, Analisis dan Perbaikan</button></a></li>
                                </ul>
                                </br>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box box-primary">
                                                    @csrf
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sub Elemen</th>
                                                                        <th>Nama Dokumen</th>
                                                                        <th>Keterangan</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($formA as $form2A)
                                                                    <tr>
                                                                        <td>{{$form2A->sub_elemen}}</td>
                                                                        <td>{{$form2A->nama_dokumen}}</td>
                                                                        <td>{{$form2A->keterangan}}</td>
                                                                        <td><input type="file" id="file" style="display:none;" />
                                                                            <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-info">Upload</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box box-primary">
                                                    @csrf
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sub Elemen</th>
                                                                        <th>Nama Dokumen</th>
                                                                        <th>Keterangan</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($formB as $form2B)
                                                                    <tr>
                                                                        <td>{{$form2B->sub_elemen}}</td>
                                                                        <td>{{$form2B->nama_dokumen}}</td>
                                                                        <td>{{$form2B->keterangan}}</td>
                                                                        <td><input type="file" id="file" style="display:none;" />
                                                                            <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-info">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box box-primary">
                                                    @csrf
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sub Elemen</th>
                                                                        <th>Nama Dokumen</th>
                                                                        <th>Keterangan</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($formC as $form2C)
                                                                    <tr>
                                                                        <td>{{$form2C->sub_elemen}}</td>
                                                                        <td>{{$form2C->nama_dokumen}}</td>
                                                                        <td>{{$form2C->keterangan}}</td>
                                                                        <td><input type="file" id="file" style="display:none;" />
                                                                            <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-info">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box box-primary">
                                                    @csrf
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sub Elemen</th>
                                                                        <th>Nama Dokumen</th>
                                                                        <th>Keterangan</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>B</td>
                                                                        <td><button type="button" class="btn btn-warning">Upload</button></td>
                                                                        <td>B</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-info">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection