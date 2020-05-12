@extends('layouts.user')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Data User</li>
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
                        <h1 class="h1 display">User
                            <!-- <h2>Data User</h2> -->
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah User
                        </h1>
                        </button>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="user" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>NAMA LENGKAP</th>
                                        <th>NIP</th>
                                        <!-- <th>PASSWORD</th> -->
                                        <th>LEVEL</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($coba_data as $coba)
                                    <tr>
                                        <td>{{$coba->name}}</td>
                                        <td>{{$coba->nip}}</td>
                                        <!-- <td>{{$coba->password}}</td> -->
                                        <td>{{$coba->userslvl->jabatan}}</td>
                                        <td>
                                            <!--    <button type="button" class="btn btn-info btn-sm" data-mynama="{{$coba->nama}}" data-mynip="{{$coba->nip}}" data-myuser="{{$coba->username}}" data-mypass="{{$coba->password}}" data-mylevel="{{$coba->level}}" data-myprodi="{{$coba->id_prodi}}" data-myjurusan="{{$coba->id_jurusan}}" data-myfoto="{{$coba->foto}}" data-toggle="modal" data-target="#editexample">
                                                Edit
                                            </button> -->
                                            <a href="/coba/{{$coba->id}}/edit" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="/coba/{{$coba->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"><i class="fa fa-trash"></i> Hapus</a>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/coba/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIP</label>
                                <input name="nip" type="text" class="form-control" id="nip" aria-describedby="emailHelp" placeholder="Masukan Nip">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Masukan Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input name="password" type="text" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Masukan Password Baru">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Level</label>
                                <select name="level" class="form-control" id="level">
                                    <option value="">Pilih Level</option>
                                    @foreach($userslvl as $lvl)
                                    <option value="{{$lvl->id_lvl}}">{{$lvl->jabatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="formprodi">
                                <label for="exampleFormControlSelect1">Prodi</label>
                                <select name="prodi" class="form-control" id="prodi">
                                    <option value="">Pilih Prodi</option>
                                    @foreach($table_prodi as $prodi)
                                    <option value="{{$prodi->id_prodi}}">{{$prodi->nama_prodi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="formjurusan">
                                <label for="exampleFormControlSelect1">Jurusan</label>
                                <select name="jurusan" class="form-control" id="jurusan">
                                    <option value="">Pilih Jurusan</option>
                                    @foreach($table_jurusan as $jurusan)
                                    <option value="{{$jurusan->id_jurusan}}">{{$jurusan->nama_jurusan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Foto</label>
                                <input name="foto" type="file" class="form-control" id="foto" aria-describedby="emailHelp">
                            </div>
                        </div>
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

<!-- <div class="modal fade" id="editexample" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/coba/edit1" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <input name="nip" type="text" class="form-control" id="nip" aria-describedby="emailHelp" placeholder="Masukan Nip">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input name="Username" type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input name="password" type="text" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Masukan Password Baru">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Level</label>
                        <select name="level" class="form-control" id="level">
                            <option value="Admin">Admin</option>
                            <option value="Kepala Jurusan">Kantor Penjaminan Mutu</option>
                            <option value="Ketua Jurusan">Ketua Jurusan</option>
                            <option value="Ketua Program Studi">Ketua Program Studi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Prodi</label>
                        <select name="prodi" class="form-control" id="prodi">
                            @foreach($table_prodi as $prodi)
                            <option value="{{$prodi->id}}">{{$prodi->nama_prodi}}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Jurusan</label>
                        <select name="jurusan" class="form-control" id="jurusan">
                            @foreach($table_jurusan as $jurusan)
                            <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Foto</label>
                        <input name="foto" type="file" class="form-control" id="foto" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>
    </div>
</div> -->
@endsection