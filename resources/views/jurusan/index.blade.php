@extends('layouts.jurusan')

@section('jurusan')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Data Jurusan</li>
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
                        <h1 class="h1 display">Jurusan
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i> Tambah Jurusan
                        </button>
                    </h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="jurusan" class="table table-striped table-hover">
                            <thead style="text-align: center;">
                                <tr>
                                    <th>NAMA JURUSAN</th>
                                    <th>TOMBOL AKSI</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                @foreach($table_jurusan as $jurusan)
                                <tr>
                                    <td>{{$jurusan->nama_jurusan}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-myid="{{$jurusan->id}}" data-myjurusan="{{$jurusan->nama_jurusan}}" data-target="#editjurusan"> <i class="fa fa-pencil"></i> Edit
                                    </button>
                                    <a href="/jurusan/{{$jurusan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"> <i class="fa fa-trash"></i> Hapus</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/jurusan/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Jurusan</label>
                        <input name="nama_jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Jurusan Baru">
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
<div class="modal fade" id="editjurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/jurusan/update" method="POST" >
                    {{csrf_field()}}
                    <div class="form-group">
                        @foreach($table_jurusan as $jurusan)
                        <input name="id" type="hidden" class="form-control" id="id" value="{{$jurusan->id}}">
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Jurusan</label>
                        <input name="nama_jurusan" type="text" class="form-control" id="nama_jurusan" aria-describedby="emailHelp" placeholder="Masukan Jurusan Baru">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection