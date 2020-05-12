@extends('layouts.form5')

@section('kajur')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Pencegahan</a></li>
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
                    <!--     <th>No</th>
                  <th>DESKRIPSI KONDISI</th>
                  <th>HASIL /OB/KTS</th>
                  <th>KRITERIA</th> -->
<<<<<<< HEAD
                  <th>AKAR MASALAH</th>
                  <th>AKIBAT(RESIKO)</th>
                  <th>REKOMENDASI</th>
                  <th>TANGGAPAN AUDIT</th>
                  <th>RENCANA PERBAIKAN</th>
                  <th>JADWAL PERBAIKAN</th>
                  <th>PENANGGUNG JAWAB PERBAIKAN (GKM)</th>
                  <th>RENCANA PENCEGAHAN</th>
                  <th>JADWAL PENCEGAHAN</th>
                  <th>PENANGGUNG JAWAB PENEGAHAN (GPM)</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                @foreach($table_form5 as $form5)
                <tr>
=======
                    <th>AKAR MASALAH</th>
                    <th>AKIBAT(RESIKO)</th>
                    <th>REKOMENDASI</th>
                    <th>TANGGAPAN AUDIT</th>
                    <th>RENCANA PERBAIKAN</th>
                    <th>JADWAL PERBAIKAN</th>
                    <th>PENANGGUNG JAWAB PERBAIKAN (GKM)</th>
                    <th>RENCANA PENCEGAHAN</th>
                    <th>JADWAL PENCEGAHAN</th>
                    <th>PENANGGUNG JAWAB PENEGAHAN (GPM)</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($table_form5 as $form5)
                  <tr>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
                    <!--         <td>{{$form5->no_ptpp}}</td>
                  <td>{{$form5->deskripsi_kondisi}}</td>
                  <td>{{$form5->hasil_temuan}}</td>
                  <td>{{$form5->kriteria}}</td> -->
<<<<<<< HEAD
                  <td>{{$form5->akar_masalah}}</td>
                  <td>{{$form5->akibat_resiko}}</td>
                  <td>{{$form5->rekomendasi}}</td>
                  <td>{{$form5->tanggapan_audit}}</td>
                  <td>{{$form5->rencana_perbaikan}}</td>
                  <td>{{date('d F Y', strtotime($form5->jadwal_perbaikan))}}</td>
                  <td>{{$form5->pj_perbaikan}}</td>
                  <td>{{$form5->rencana_pencegahan}}</td>
                  <td>{{date('d F Y', strtotime($form5->jadwal_pencegahan))}}</td>
                  <td>{{$form5->pj_pencegahan}}</td>
                  <td>
                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detailModalLabel">
                      <i class="fa fa-eye"></i> Detail
                    </button>
                    @if($form5->rencana_pencegahan == NULL)
                    <button type="button" class="btn btn-info btn-sm" data-myid="{{$form5->id}}" data-mypencegahan="{{$form5->rencana_pencegahan}}" data-myjadwal="{{$form5->jadwal_pencegahan}}" data-mypj="{{$form5->pj_pencegahan}}" data-toggle="modal" data-target="#editform5kajur">
                      <i class="fa fa-pencil"></i> Tambah
                    </button>
                    @else
                    <button type="button" class="btn btn-info btn-sm" data-myid="{{$form5->id}}" data-mypencegahan="{{$form5->rencana_pencegahan}}" data-myjadwal="{{$form5->jadwal_pencegahan}}" data-mypj="{{$form5->pj_pencegahan}}" data-toggle="modal" data-target="#editform5kajur">
                      <i class="fa fa-pencil"></i> Edit
                    </button>
                    @endif
                    <!--   <a href="/form5/{{$form5->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"><i class="fa fa-trash"></i> Hapus</a> -->
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
=======
                    <td>{{$form5->akar_masalah}}</td>
                    <td>{{$form5->akibat_resiko}}</td>
                    <td>{{$form5->rekomendasi}}</td>
                    <td>{{$form5->tanggapan_audit}}</td>
                    <td>{{$form5->rencana_perbaikan}}</td>
                    <td>{{date('d F Y', strtotime($form5->jadwal_perbaikan))}}</td>
                    <td>{{$form5->pj_perbaikan}}</td>
                    <td>{{$form5->rencana_pencegahan}}</td>
                    <td>{{date('d F Y', strtotime($form5->jadwal_pencegahan))}}</td>
                    <td>{{$form5->pj_pencegahan}}</td>
                    <td>
                      <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detailModalLabel">
                        <i class="fa fa-eye"></i> Detail
                      </button>
                      @if($form5->rencana_pencegahan == NULL)
                      <button type="button" class="btn btn-info btn-sm" data-myid="{{$form5->id}}" data-mypencegahan="{{$form5->rencana_pencegahan}}" data-myjadwal="{{$form5->jadwal_pencegahan}}" data-mypj="{{$form5->pj_pencegahan}}" data-toggle="modal" data-target="#edit2">
                        <i class="fa fa-pencil"></i> Tambah
                      </button>
                      @else
                      <button type="button" class="btn btn-info btn-sm" data-myid="{{$form5->id}}" data-mypencegahan="{{$form5->rencana_pencegahan}}" data-myjadwal="{{$form5->jadwal_pencegahan}}" data-mypj="{{$form5->pj_pencegahan}}" data-toggle="modal" data-target="#edit2">
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
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
          </div>
        </div>
      </div>
    </div>
  </div>
<<<<<<< HEAD
</div>
</section>

<div class="modal fade" id="editform5kajur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
</section>

<div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Pencegahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/form5/edit2" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          @foreach($table_form5 as $form5)
          <div class="form-group">
            <input name="id" type="hidden" class="form-control" id="id" value="{{$form5->id}}">
          </div>
          @endforeach
          <div class="form-group">
            <input name="id" type="hidden" class="form-control" id="id" value="{{$form5->id}}">
          </div>
          <div class="form-group">
            <label for="pencegahan">Rencana Pencegahan</label>
            <!-- <input name="pencegahan" type="text" class="form-control" id="pencegahan" aria-describedby="emailHelp" placeholder="Masukan Rencana Pencegahan"> -->
            <textarea class="form-control" name="pencegahan" id="pencegahan" rows="3" placeholder="Masukan Rencana Pencegahan"></textarea>
          </div>
          <div class="form-group">
            <label for="jadwal">Jadwal Pencegahan</label>
            <input name="jadwal" type="date" class="form-control" id="jadwal" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="pj">Penanggung Jawab Pencegahan (GPM)</label>
            <input name="pj" type="text" class="form-control" id="pj" aria-describedby="emailHelp" placeholder="Masukan Penanggung Jawab Pencegahan">
          </div>
<<<<<<< HEAD
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-info">Simpan</button>
=======
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-info">Simpan</button>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
        </form>
      </div>
    </div>
  </div>
</div>

@endsection