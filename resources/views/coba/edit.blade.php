@extends('layouts.user')

@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<section>
    <div class="container-fluid">
        <header>
            <h1 class="h1 display">Edit User</h1>
        </header>
        <div class="row">
            <!-- <div class="col-lg-12">
                <div class="card">
                    <form action="/coba/{{$coba->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap" value="{{$coba->nama_lengkap}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input name="usernamee" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username Baru" value="{{$coba->usernamee}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input name="passwordd" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Password Baru" value="{{$coba->passwordd}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Level</label>
                            <select name="level" class="form-control" id="exampleFormControlSelect1">
                                <option value="Admin" @if($coba->level == "Admin") selected @endif>Admin</option>
                                <option value="Kepala Jurusan" @if($coba->level == "Kepala Jurusan") selected @endif>Kepala Jurusan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div> -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" action="/coba/{{$coba->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap" value="{{$coba->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIP</label>
                                <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nip" value="{{$coba->nip}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">USERNAME</label>
                                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username" value="{{$coba->username}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Level</label>
                                <select name="level" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Admin" @if($coba->level == "Admin") selected @endif>Admin</option>
                                    <option value="Kantor Penjaminan Mutu" @if($coba->level == "Kantor Penjaminan Mutu") selected @endif>Kantor Penjaminan Mutu</option>
                                    <option value="Ketua Jurusan" @if($coba->level == "Ketua Jurusan") selected @endif>Ketua Jurusan</option>
                                    <option value="Ketua Program Studi" @if($coba->level == "Ketua Program Studi") selected @endif>Ketua Program Studi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Foto</label>
                                <input name="foto" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <a href="{{ URL::previous()}}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection