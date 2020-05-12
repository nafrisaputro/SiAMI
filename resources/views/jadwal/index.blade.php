@extends('layouts.jadwal')

@section('jadwal')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Audit</a></li>
      <li class="breadcrumb-item active">Jadwal Audit Form 5</li>
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
          <h3>Jadwal Audit Form 5
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah">
              <i class="fa fa-plus"></i> Tambah
            </button>
          </h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="jadwal" class="table table-bordered">
              <thead style="text-align: center;">
                <tr>
                  <th>Tanggal Audit</th>
                  <th>Lokasi</th>
                  <th>Ruang Lingkup</th>
                  <th>Tahap Audit</th>
                  <th>Auditi</th>
                  <th>Wakil Auditi</th>
                  <th>Auditor Ketua</th>
                  <th>Auditor Anggota</th>
                  <th>Lead Auditor</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($jadwal as $jdwl)
                <tr>
                  <td>{{date('d F Y', strtotime($jdwl->tgl_audit))}}</td>
                  <td>Program Studi {{$jdwl->prodi->nama_prodi}}</td>
                  <td>{!! $jdwl->ruang_lingkup !!}</td>
                  <td>{!! $jdwl->tahap_audit !!}</td>
                  <td>{{$jdwl->auditi}}</td>
                  <td>{{$jdwl->wakil_auditi}}</td>
                  <td>{{$jdwl->auditor_ketua}}</td>
                  <td>{{$jdwl->auditor_anggota}}</td>
                  <td>{{$jdwl->lead_auditor}}</td>
                  <td>
                   <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editjadwalkjm" data-myid="{{$jdwl->id}}" data-mytgl="{{$jdwl->tgl_audit}}" data-mylokasi="{{$jdwl->lokasi}}" data-myruang="{{$jdwl->ruang_lingkup}}" data-mytahap="{{$jdwl->tahap_audit}}" data-myauditi="{{$jdwl->auditi}}" data-mywakil="{{$jdwl->wakil_auditi}}" data-myauditor="{{$jdwl->auditor_ketua}}" data-myanggota="{{$jdwl->auditor_anggota}}" data-mylead="{{$jdwl->lead_auditor}}">
                    <i class="fa fa-pencil"></i> Edit
                  </button>
                  <a href="/jadwal/{{$jdwl->id_jadwal}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"><i class="fa fa-trash"></i> Hapus</a>
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

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Audit Form 5</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/jadwal/create" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="row"> 
            <div class="col-lg-6">
              <div class="form-group">
                <label for="tgl">Tanggal Audit</label>
                <input name="tgl" type="date" class="form-control" id="tgl" aria-describedby="emailHelp" required="">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Prodi</label>
                <select name="prodi" class="form-control" id="prodi">
                  <option value="">Pilih Prodi</option>
                  @foreach($prodi as $pr)
                  <option value="{{$pr->id_prodi}}">{{$pr->nama_prodi}}</option>
                  @endforeach
                </select>
              </div>
              <label for="ruang">Ruang Lingkup</label>
              <div class="form-group">
                <label><input type="checkbox" name="ruang[]" value="Analisa SWOT"> Analisa SWOT</label><br>
                <label><input type="checkbox" name="ruang[]" value="Visi, Misi, Tujuan dan Sasaran"> Visi, Misi, Tujuan dan Sasaran</label><br>
                <label><input type="checkbox" name="ruang[]" value="Tata Pamong"> Tata Pamong</label><br>
                <label><input type="checkbox" name="ruang[]" value="Sistem Manajemen Mutu"> Sistem Manajemen Mutu</label><br>
                <label><input type="checkbox" name="ruang[]" value="Kerja Sama"> Kerja Sama</label><br>
                <label><input type="checkbox" name="ruang[]" value="Manajemen Sumberdaya"> Manajemen Sumberdaya</label><br>
                <label><input type="checkbox" name="ruang[]" value="Pelaksanaan Proses"> Pelaksanaan Proses</label><br>
                <label><input type="checkbox" name="ruang[]" value="Pengukuran, Analisis dan Perbaikan"> Pengukuran, Analisis dan Perbaikan</label>
              </div>
           <!--  <div class="form-group">
               <input type="text" class="form-control" id="tahap" name="tahap" value="" >
              <textarea class="form-control" name="tahap" id="tahap" rows="3" readonly></textarea>
            </div> -->
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="auditi">Auditi</label>
              <textarea class="form-control" name="auditi" id="auditi" rows="2" placeholder="Masukkan Nama Auditi"></textarea>
            </div>
            <div class="form-group">
              <label for="wakil">Wakil Auditi</label>
              <input type="text" class="form-control" id="wakil" name="wakil" placeholder="Masukkan Nama Wakil Auditi">
            </div>
            <div class="form-group">
              <label for="auditor">Auditor Ketua</label>
              <input type="text" class="form-control" id="auditor" name="auditor" placeholder="Masukkan Nama Auditor Ketua">
            </div>
            <div class="form-group">
              <label for="anggota">Auditor Anggota</label>
              <textarea class="form-control" name="anggota" id="anggota" rows="2" placeholder="Masukkan Nama Auditor Anggota"></textarea>
            </div>
            <div class="form-group">
              <label for="lead">Lead Auditor</label>
              <input type="text" class="form-control" id="lead" name="lead" placeholder="Masukkan Nama Lead Auditor">
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

<div class="modal fade" id="editjadwalkjm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Jadwal Audit Form 5</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/jadwal/edit" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
             @foreach($jadwal as $jdwl)
            <input name="id" type="hidden" class="form-control" id="id" value="{{$jdwl->id_jadwal}}">
            @endforeach
          </div>
          <div class="row"> 
            <div class="col-lg-6">
              <div class="form-group">
                <label for="tgl">Tanggal Audit</label>
                <input name="tgl" type="date" class="form-control" id="tgl" aria-describedby="emailHelp" required="">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Prodi</label>
                <select name="prodi" class="form-control" id="prodi">
                  <option value="">Pilih Prodi</option>
                  @foreach($prodi as $pr)
                  <option value="{{$pr->id_prodi}}">{{$pr->nama_prodi}}</option>
                  @endforeach
                </select>
              </div>
              <label for="ruang">Ruang Lingkup</label>
              <div class="form-group">
                <label><input type="checkbox" name="ruang[]" value="Analisa SWOT"> Analisa SWOT</label><br>
                <label><input type="checkbox" name="ruang[]" value="Visi, Misi, Tujuan dan Sasaran"> Visi, Misi, Tujuan dan Sasaran</label><br>
                <label><input type="checkbox" name="ruang[]" value="Tata Pamong"> Tata Pamong</label><br>
                <label><input type="checkbox" name="ruang[]" value="Sistem Manajemen Mutu"> Sistem Manajemen Mutu</label><br>
                <label><input type="checkbox" name="ruang[]" value="Kerja Sama"> Kerja Sama</label><br>
                <label><input type="checkbox" name="ruang[]" value="Manajemen Sumberdaya"> Manajemen Sumberdaya</label><br>
                <label><input type="checkbox" name="ruang[]" value="Pelaksanaan Proses"> Pelaksanaan Proses</label><br>
                <label><input type="checkbox" name="ruang[]" value="Pengukuran, Analisis dan Perbaikan"> Pengukuran, Analisis dan Perbaikan</label>
              </div>
           <!--  <div class="form-group">
               <input type="text" class="form-control" id="tahap" name="tahap" value="" >
              <textarea class="form-control" name="tahap" id="tahap" rows="6" readonly></textarea>
            </div> -->
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="auditi">Auditi</label>
              <textarea class="form-control" name="auditi" id="auditi" rows="3" placeholder="Masukkan Nama Auditi"></textarea>
            </div>
            <div class="form-group">
              <label for="wakil">Wakil Auditi</label>
              <input type="text" class="form-control" id="wakil" name="wakil" placeholder="Masukkan Nama Wakil Auditi">
            </div>
            <div class="form-group">
              <label for="auditor">Auditor Ketua</label>
              <input type="text" class="form-control" id="auditor" name="auditor" placeholder="Masukkan Nama Auditor Ketua">
            </div>
            <div class="form-group">
              <label for="anggota">Auditor Anggota</label>
              <input type="text" class="form-control" id="anggota" name="anggota" placeholder="Masukkan Nama Auditor Anggota">
            </div>
            <div class="form-group">
              <label for="lead">Lead Auditor</label>
              <input type="text" class="form-control" id="lead" name="lead" placeholder="Masukkan Nama Lead Auditor">
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

@endsection