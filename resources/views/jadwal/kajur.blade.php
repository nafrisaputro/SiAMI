@extends('layouts.jadwal')

@section('jadwalkajur')

<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Pencegahan COVID-19</a></li>
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
          </h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="jadwalkajur" class="table table-bordered">
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
                </tr>
              </thead>
              <tbody>
                @foreach($jadwal as $jdwl)
                <tr>
                  <td>{{date('d F Y', strtotime($jdwl->tgl_audit))}}</td>
                  <td>Program Studi {{$jdwl->nama_prodi}}</td>
                  <td>{!! $jdwl->ruang_lingkup !!}</td>
                  <td>{!! $jdwl->tahap_audit !!}</td>
                  <td>{{$jdwl->auditi}}</td>
                  <td>{{$jdwl->wakil_auditi}}</td>
                  <td>{{$jdwl->auditor_ketua}}</td>
                  <td>{{$jdwl->auditor_anggota}}</td>
                  <td>{{$jdwl->lead_auditor}}</td>
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


@endsection
