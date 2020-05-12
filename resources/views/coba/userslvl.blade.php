@extends('layouts.user')

@section('userlvl')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Data User Level</li>
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
                        <h1 class="h1 display">User Level
                            <!-- <h2>Data User</h2> -->
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahlvl"><i class="fa fa-plus"></i> Tambah User Level
                        </h1>
                    </button>
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="user" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Users_lvl as $lvl)
                            <tr>
                                <td>{{$lvl->id_lvl}}</td>
                                <td>{{$lvl->jabatan}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-myid="{{$lvl->id_lvl}}" data-myjabatan="{{$lvl->jabatan}}" data-target="#editlvl"> <i class="fa fa-pencil"></i> Edit
                                    </button>
                                    <a href="/userlvl/{{$lvl->id_lvl}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"><i class="fa fa-trash"></i> Hapus</a>
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
<div class="modal fade" id="tambahlvl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User Level</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/userlvl/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input name="jabatan" type="text" class="form-control" id="jabatan" aria-describedby="emailHelp" placeholder="Masukan Jabatan">
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

<div class="modal fade" id="editlvl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User Level</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/userlvl/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @foreach($Users_lvl as $lvl)
                    <input name="lvl" type="hidden" class="form-control" id="lvl" value="{{$lvl->id_lvl}}">
                    @endforeach
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input name="jabatan" type="text" class="form-control" id="jabatan" aria-describedby="emailHelp" placeholder="Masukan Jabatan">
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