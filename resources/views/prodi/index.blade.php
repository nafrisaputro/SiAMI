@extends('layouts.prodi')

@section('prodi')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Data Prodi</li>
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
                        <h1 class="h1 display">Prodi
<<<<<<< HEAD
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i> Tambah Prodi
                        </button>
                    </h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="prodi" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>NAMA PRODI</th>
                                    <th>NAMA JURUSAN</th>
                                    <th>TOMBOL AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($table_prodi as $prodi)
                                <tr>
                                    <td>{{$prodi->nama_prodi}}</td>
                                    <td>{{$prodi->jurusan->nama_jurusan}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-myprodi="{{$prodi->nama_prodi}}" data-myjurusan="{{$prodi->id_jurusan}}" data-myid="{{$prodi->id}}" data-toggle="modal" data-target="#editprodi"><i class="fa fa-pencil"></i> Edit
                                    </button>
                                    <a href="/prodi/{{$prodi->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"> <i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
=======
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                                Tambah Prodi
                            </button>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>NAMA PRODI</th>
                                        <th>TOMBOL AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($table_prodi as $prodi)
                                    <tr>
                                        <td>{{$prodi->nama_prodi}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm" data-myprodi="{{$prodi->nama_prodi}}" data-myjurusan="{{$prodi->id_jurusan}}" data-myid="{{$prodi->id}}" data-toggle="modal" data-target="#editModalLabel">
                                                Edit
                                            </button>
                                            <a href="/prodi/{{$prodi->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Prodi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/prodi/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Prodi</label>
                        <input name="nama_prodi" type="text" class="form-control" id="nama_prodi" aria-describedby="emailHelp" placeholder="Masukan Prodi Baru">
                    </div>
                    <label for="exampleInputEmail1">Jurusan</label>
                    <select name="id_jurusan" class="form-control" id="id_jurusan">
<<<<<<< HEAD
                        <option value="">Pilih Jurusan</option>
=======
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
                        @foreach($table_jurusan as $jurusan)
                        <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<div class="modal fade" id="editprodi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
<div class="modal fade" id="editModalLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Prodi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/prodi/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
<<<<<<< HEAD
                        @foreach($table_prodi as $prodi)
                        <input name="id" type="hidden" class="form-control" id="id" value="{{$prodi->id}}">
                        @endforeach
=======
                        <input name="id" type="hidden" class="form-control" id="id" value="{{$prodi->id}}">
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Prodi</label>
                        <input name="nama_prodi" type="text" class="form-control" id="nama_prodi" aria-describedby="emailHelp" placeholder="Masukan Prodi">
                    </div>
                    <div>
                        <label for="exampleInputEmail1">Jurusan</label>
                        <select name="id_jurusan" class="form-control" id="id_jurusan">
<<<<<<< HEAD
                          @foreach($table_jurusan as $jurusan)
                          <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </div>
            </form>
=======
                            @foreach($table_jurusan as $jurusan)
                            <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
        </div>
    </div>
</div>
</div>

@endsection