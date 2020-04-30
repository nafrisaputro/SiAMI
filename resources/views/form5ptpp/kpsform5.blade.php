@extends('layouts.form5')

@section('kps')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Perbaikan</a></li>
      <li class="breadcrumb-item active">Form 5 PTPP</li>
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
            <h1 class="h1 display">Form 5 PTPP
              <button type="button" class="btn btn-warning float-right">
                <i class="fa fa-print"></i> Print
              </button>
            </h1>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="table5" class="table table-bordered">
                <thead style="text-align: center;">
                  <tr>
                    <!-- <th>DESKRIPSI KONDISI</th>
                    <th>HASIL /OB/KTS</th>
                    <th>KRITERIA</th> -->
                    <th>AKAR MASALAH</th>
                    <th>AKIBAT(RESIKO)</th>
                    <th>REKOMENDASI</th>
                    <th>TANGGAPAN AUDIT</th>
                    <th>RENCANA PERBAIKAN</th>
                    <!-- <th>JADWAL PERBAIKAN</th>
                    <th>PENANGGUNG JAWAB PERBAIKAN (GKM)</th>
                    <th>RENCANA PENCEGAHAN</th>
                    <th>JADWAL PENCEGAHAN</th>
                    <th>PENANGGUNG JAWAB PENEGAHAN (GPM)</th> -->
                    <!-- <th>prodi</th> -->
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($table_form5 as $form5)
                  <tr>
                    <!--  <td>{{$form5->deskripsi_kondisi}}</td>
                    <td>{{$form5->hasil_temuan}}</td>
                    <td>{{$form5->kriteria}}</td> -->
                    <td>{{$form5->akar_masalah}}</td>
                    <td>{{$form5->akibat_resiko}}</td>
                    <td>{{$form5->rekomendasi}}</td>
                    <td>{{$form5->tanggapan_audit}}</td>
                    <td>{{$form5->rencana_perbaikan}}</td>
                    <!-- <td>{{$form5->id_prodi}}</td> -->
                    <!--   <td>{{date('d F Y', strtotime($form5->jadwal_perbaikan))}}</td>
                    <td>{{$form5->pj_perbaikan}}</td>
                    <td>{{$form5->rencana_pencegahan}}</td>
                    <td>{{date('d F Y', strtotime($form5->jadwal_pencegahan))}}</td>
                    <td>{{$form5->pj_pencegahan}}</td> -->
                    <td>
                      <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detailModalLabel">
                        <i class="fa fa-eye"></i> Detail
                      </button>
                      @if($form5->tanggapan_audit == NULL)
                      <button type="button" class="btn btn-info btn-sm" data-myid="{{$form5->id}}" data-mytanggap="{{$form5->tanggapan_audit}}" data-myrencana="{{$form5->rencana_perbaikan}}" data-toggle="modal" data-target="#edit1">
                        <i class="fa fa-pencil"></i> Tambah
                      </button>
                      @else
                      <button type="button" class="btn btn-info btn-sm" data-myid="{{$form5->id}}" data-mytanggap="{{$form5->tanggapan_audit}}" data-myrencana="{{$form5->rencana_perbaikan}}" data-toggle="modal" data-target="#edit1">
                        <i class="fa fa-pencil"></i> Edit
                      </button>
                      @endif
                      <!--   <a href="/form5/{{$form5->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"><i class="fa fa-trash"></i> Hapus</a> -->

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

<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 600px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Perbaikan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/form5/edit1" method="POST">
          {{csrf_field()}}
          <!-- ---------------------------------problemm-------------------- -->
          @foreach($table_form5 as $form5)
          <div class="form-group">
            <input name="id" type="hidden" class="form-control" id="id" value="{{$form5->id}}">
          </div>
          @endforeach
          <!-- ---------------------------------------------->
          <div class="form-group">
            <label for="auditi">Tanggapan Auditi</label>
            <input name="auditi" type="text" class="form-control" id="auditi" aria-describedby="emailHelp" placeholder="Masukan Tanggapan Auditi">
          </div>
          <div class="form-group">
            <label for="perbaikan">Rencana Perbaikan</label>
            <input name="perbaikan" type="text" class="form-control" id="perbaikan" aria-describedby="emailHelp" placeholder="Masukan Rencana Perbaikan">
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