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
                            @csrf
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <button class="btn btn-info float-right">Upload</button>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Sub Elemen</th>
                                                <th>Nama Dokumen</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($formA as $form2A)
                                            <?php $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{$form2A->sub_elemen}}</td>
                                                <td>{{$form2A->nama_dokumen}}</td>
                                                <td>{{$form2A->keterangan}}</td>
                                                <td><input type="file" id="file" style="display:none;" />
                                                    <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="B" class="tabcontent">
                        <div class="box box-primary">
                            @csrf
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <button class="btn btn-info float-right">Upload</button>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Sub Elemen</th>
                                                <th>Nama Dokumen</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($formB as $form2B)
                                            <?php $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{$form2B->sub_elemen}}</td>
                                                <td>{{$form2B->nama_dokumen}}</td>
                                                <td>{{$form2B->keterangan}}</td>
                                                <td><input type="file" id="file" style="display:none;" />
                                                    <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="C" class="tabcontent">
                        <div class="box box-primary">
                            @csrf
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <button class="btn btn-info float-right">Upload</button>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Sub Elemen</th>
                                                <th>Nama Dokumen</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($formC as $form2C)
                                            <?php $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{$form2C->sub_elemen}}</td>
                                                <td>{{$form2C->nama_dokumen}}</td>
                                                <td>{{$form2C->keterangan}}</td>
                                                <td><input type="file" id="file" style="display:none;" />
                                                    <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="D" class="tabcontent">
                        <div class="box box-primary">
                            @csrf
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <button class="btn btn-info float-right">Upload</button>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Sub Elemen</th>
                                                <th>Nama Dokumen</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($formD as $form2D)
                                            <?php $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{$form2D->sub_elemen}}</td>
                                                <td>{{$form2D->nama_dokumen}}</td>
                                                <td>{{$form2D->keterangan}}</td>
                                                <td><input type="file" id="file" style="display:none;" />
                                                    <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
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
        </div>
    </div>
</section>
@endsection