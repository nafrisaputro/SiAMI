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
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <button class="btn float-right"><i class=" fa fa-plus" data-toggle="modal" data-target="#exampleModal"></i></button>
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
                                                <td><a href="/form2/{{$form2A->id_form2}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')">Hapus</a></td>
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
                                                <td><input type="file" id="file" accept="application/pdf" style="display:none;" />
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
                                                <td><input type="file" id="file" accept="application/pdf" style="display:none;" />
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
                                                <td><input type="file" id="file" accept="application/pdf" style="display:none;" />
                                                    <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="E" class="tabcontent">
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
                                            @foreach($formE as $form2E)
                                            <?php $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{$form2E->sub_elemen}}</td>
                                                <td>{{$form2E->nama_dokumen}}</td>
                                                <td>{{$form2E->keterangan}}</td>
                                                <td><input type="file" id="file" accept="application/pdf" style="display:none;" />
                                                    <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="F" class="tabcontent">
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
                                            @foreach($formF as $form2F)
                                            <?php $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{$form2F->sub_elemen}}</td>
                                                <td>{{$form2F->nama_dokumen}}</td>
                                                <td>{{$form2F->keterangan}}</td>
                                                <td><input type="file" id="file" accept="application/pdf" style="display:none;" />
                                                    <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="G" class="tabcontent">
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
                                            @foreach($formG as $form2G)
                                            <?php $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{$form2G->sub_elemen}}</td>
                                                <td>{{$form2G->nama_dokumen}}</td>
                                                <td>{{$form2G->keterangan}}</td>
                                                <td><input type="file" id="file" accept="application/pdf" style="display:none;" />
                                                    <button id="button" name="button" value="Upload" onclick="thisFileUpload();" class="btn btn-warning">Pilih File</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="H" class="tabcontent">
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
                                            @foreach($formH as $form2H)
                                            <?php $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{$form2H->sub_elemen}}</td>
                                                <td>{{$form2H->nama_dokumen}}</td>
                                                <td>{{$form2H->keterangan}}</td>
                                                <td><input type="file" id="file" accept="application/pdf" style="display:none;" />
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