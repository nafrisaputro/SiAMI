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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" action="/coba/{{$coba->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap" value="{{$coba->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIP</label>
                                <input name="nip" type="text" class="form-control" id="nip" aria-describedby="emailHelp" placeholder="Masukan Nip" value="{{$coba->nip}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Masukan Username" value="{{$coba->username}}">
                            </div>
                            <!--   <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input name="password" type="text" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Masukan Password Baru">
                            </div> -->
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Level</label>
                                <select name="level" class="form-control" id="level">
                                    <option value="Admin" @if($coba->level == "Admin") selected @endif>Admin</option>
                                    <option value="Kantor Penjaminan Mutu" @if($coba->level == "Kantor Penjaminan Mutu") selected @endif>Kantor Penjaminan Mutu</option>
                                    <option value="Ketua Jurusan" @if($coba->level == "Ketua Jurusan") selected @endif>Ketua Jurusan</option>
                                    <option value="Ketua Program Studi" @if($coba->level == "Ketua Program Studi") selected @endif>Ketua Program Studi</option>
                                </select>
                            </div>
                            @if($coba->level == 'Ketua Program Studi' )
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Prodi</label>
                                <select name="prodi" class="form-control" id="prodi">
                                    @foreach ($table_prodi as $prodi )
                                    <option value="{{ $prodi->id }}" {{$prodi->id == $coba->id_prodi ? 'selected' : ''}}>
                                        {{ $prodi->nama_prodi }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jurusan</label>
                                <select name="jurusan" class="form-control" id="jurusan">
                                    @foreach ($table_jurusan as $jurusan )
                                    <option value="{{ $jurusan->id }}" {{$jurusan->id == $coba->id_jurusan ? 'selected' : ''}}>
                                        {{ $jurusan->nama_jurusan }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @elseif ($coba->level == 'Ketua Jurusan' )
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jurusan</label>
                                <select name="jurusan" class="form-control" id="jurusan">
                                    @foreach ($table_jurusan as $jurusan )
                                    <option value="{{ $jurusan->id }}" {{$jurusan->id == $coba->id_jurusan ? 'selected' : ''}}>
                                        {{ $jurusan->nama_jurusan }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">Foto</label>
                                <input name="foto" type="file" class="form-control" id="foto" aria-describedby="emailHelp">
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