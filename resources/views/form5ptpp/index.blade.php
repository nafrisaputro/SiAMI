@extends('layouts.form5')

@section('form5ptpp')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Audit</a></li>
      <li class="breadcrumb-item active">Form 5 PTPP</li>
    </ul>
  </div>
</div>
<section>
  <div class="container-fluid">
    <header>
      <h1 class="h1 display">Audit</h1>
    </header>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h1 class="h1 display">Form 5 PTPP
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah">
                <i class="fa fa-plus"></i> Tambah 
              </button>
              <button type="button" class="btn btn-warning " style="margin-left: 630px">
                <i class="fa fa-print"></i> Print 
              </button>
            </h1>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="table5" class="table table-bordered">
                <thead style="text-align: center;">
                  <tr>
                    <th>DESKRIPSI KONDISI</th>
                    <th>HASIL /OB/KTS</th>
                    <th>KRITERIA</th>
                    <th>AKAR MASALAH</th>
                    <th>AKIBAT(RESIKO)</th>
                    <!-- <th>REKOMENDASI</th> -->
                                       <!--  <th>TANGGAPAN AUDIT</th>
                                        <th>RENCANA PERBAIKAN</th> -->
                                      <!--   <th>JADWAL PERBAIKAN</th>
                                        <th>PENANGGUNG JAWAB PERBAIKAN (GKM)</th>
 -->                                      <!--   <th>RENCANA PENCEGAHAN</th>
                                        <th>JADWAL PENCEGAHAN</th>
                                        <th>PENANGGUNG JAWAB PENEGAHAN (GPM)</th> -->
                                        <th>AKSI</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($table_form5 as $form5)
                                      <tr>
                                        <td>{{$form5->deskripsi_kondisi}}</td>
                                        <td>{{$form5->hasil_temuan}}</td>
                                        <td>{{$form5->kriteria}}</td>
                                        <td>{{$form5->akar_masalah}}</td>
                                        <td>{{$form5->akibat_resiko}}</td>
                                        <!-- <td>{{$form5->rekomendasi}}</td> -->
                                       <!--  <td>{{$form5->tanggapan_audit}}</td>
                                        <td>{{$form5->rencana_perbaikan}}</td> -->
                                      <!--   <td>{{$form5->jadwal_perbaikan}}</td>
                                        <td>{{$form5->pj_perbaikan}}</td> -->
                                      <!--   <td>{{$form5->rencana_pencegahan}}</td>
                                        <td>{{$form5->jadwal_pencegahan}}</td>
                                        <td>{{$form5->pj_pencegahan}}</td> -->
                                        <td>
                                          <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detail">
                                           <i class="fa fa-eye"></i> Detail
                                         </button>
                                         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editModalLabel">
                                           <i class="fa fa-pencil"></i> Edit
                                         </button>
                                         <a href="/form5/{{$form5->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi hapus ?')"><i class="fa fa-trash"></i> Hapus</a>
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
                    <div class="modal-dialog" role="document">
                      <div class="modal-content" style="width: 600px">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Temuan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/form5/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                              <label for="exampleFormControlSelect1">Prodi</label>
                              <select name="prodi" class="form-control" id="prodi" required="">
                                <option value="">Pilih Prodi</option>
                                @foreach($prodi as $pr)
                                <option value="{{ $pr->id}}">{{ $pr->nama_prodi}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="no">No dan Klausul ISO</label>
                              <input name="no" type="text" class="form-control" id="no" aria-describedby="emailHelp" placeholder="Masukan Nomor dan Klausul ISO" required="">
                            </div>
                            <div class="form-group">
                              <label for="deskripsi">Deskripsi Kondisi</label>
                              <input name="deskripsi" type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp" placeholder="Masukan Deskripsi Kondisi">
                            </div>
                            <div class="form-group">
                              <label for="deskripsi">Hasil /OB/KTS</label>
                              <div class="i-checks">
                                <input id="ob" type="radio" value="OB" name="radio" class="form-control-custom radio-custom">
                                <label for="ob">OB (Observasi)</label>
                                <input id="kts" type="radio"  value="KTS" name="radio" class="form-control-custom radio-custom">
                                <label for="kts">KTS (Ketidaksesuaian)</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="kriteria">Kriteria</label>
                              <div class="i-checks">
                                <input id="Mayor" type="radio" value="Mayor" name="radio2" class="form-control-custom radio-custom">
                                <label for="Mayor">Mayor</label>
                                <input id="Minor" type="radio"  value="Minor" name="radio2" class="form-control-custom radio-custom">
                                <label for="Minor">Minor</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="masalah">Akar Masalah</label>
                              <input name="masalah" type="text" class="form-control" id="masalah" aria-describedby="emailHelp" placeholder="Masukan Akar Masalah">
                            </div>
                            <div class="form-group">
                              <label for="akibat">Akibat (RESIKO)</label>
                              <input name="akibat" type="text" class="form-control" id="akibat" aria-describedby="emailHelp" placeholder="Masukan Akibat (RESIKO)">
                            </div>
                            <div class="form-group">
                              <label for="rekom">Rekomendasi</label>
                              <input name="rekom" type="text" class="form-control" id="rekom" aria-describedby="emailHelp" placeholder="Masukan Rekomendasi">
                            </div>
                            <div class="form-group">
                              <label for="jadwal">Jadwal Perbaikan</label>
                              <input name="jadwal" type="date" class="form-control" id="jadwal" aria-describedby="emailHelp" >
                            </div>
                            <div class="form-group">
                              <label for="gkm">Penanggung Jawab Perbaikan(GKM)</label>
                              <input name="gkm" type="text" class="form-control" id="gkm" aria-describedby="emailHelp" placeholder="Masukan Penanggung Jawaban Perbaikan(GKM)">
                            </div>
                             <div class="form-group">
                              <input name="status" type="hidden" class="form-control" id="status" value="Open" aria-describedby="emailHelp" >
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

                  <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Detail Data Temuan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <table class="table" style="width: 300px">
                            <thead>
                              <tr>
                                <th>DESKRIPSI KONDISI</th>
                                <th>HASIL /OB/KTS</th>
                                <th>KRITERIA</th>
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
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($table_form5 as $form5)
                              <tr>
                                <td>{{$form5->deskripsi_kondisi}}</td>
                                <td>{{$form5->hasil_temuan}}</td>
                                <td>{{$form5->kriteria}}</td>
                                <td>{{$form5->akar_masalah}}</td>
                                <td>{{$form5->akibat_resiko}}</td>
                                <td>{{$form5->rekomendasi}}</td>
                                <td>{{$form5->tanggapan_audit}}</td>
                                <td>{{$form5->rencana_perbaikan}}</td>
                                <td>{{$form5->jadwal_perbaikan}}</td>
                                <td>{{$form5->pj_perbaikan}}</td>
                                <td>{{$form5->rencana_pencegahan}}</td>
                                <td>{{$form5->jadwal_pencegahan}}</td>
                                <td>{{$form5->pj_pencegahan}}</td>

                              </tr>
                              @endforeach
                            </tbody>
                          </table>
 <!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
       <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
       <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
       <th scope="col">#</th>
      <th scope="col">First</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
       <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
       <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
       <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table> -->
</div>
</div>
</div>
</div>

@endsection