@extends('layouts.jadwalaudit')

@section('jadwalkps')
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
     <li class="breadcrumb-item"><a href="#">Ketua Program Studi</a></li>
     <li class="breadcrumb-item active">Jadwal Audit</li>
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
            <h1 class="h1 display">Jadwal Audit
            </h1>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="jadwalkps" class="table table-bordered">
                <thead style="text-align: center">
                  <tr>
                   <th>No</th>
                   <th>Keterangan</td>
                   <th>Jadwal Audit</th>
                   <!-- <th>PEMERIKSAAN</th> -->
                 </tr>
               </thead>
               <tbody>
                @foreach($jadwalaudit as $audit)
                <tr>
                  <td>{{$audit->id_jadwal_audit}}</td>
                  <td>{{$audit->keterangan}}</td>
                  <td>{{$audit->dokumen}}</td>
                  <!-- <td>{{$audit->status}}</td> -->
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
