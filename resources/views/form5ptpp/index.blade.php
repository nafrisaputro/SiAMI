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
    <br>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3>Form 5 PTPP
<<<<<<< HEAD
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahform5kjm">
=======
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#tambah">
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
                <i class="fa fa-plus"></i> Tambah
              </button>
              <button type="button" class="btn btn-warning " style="margin-left: 630px">
                <i class="fa fa-print"></i> Print
              </button>
            </h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="table5" class="table table-bordered">
                <thead style="text-align: center;">
                  <tr>
                    <!-- <th>NO</th> -->
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
                                      -->
                    <!--   <th>RENCANA PENCEGAHAN</th>
                                        <th>JADWAL PENCEGAHAN</th>
                                        <th>PENANGGUNG JAWAB PENEGAHAN (GPM)</th> -->
<<<<<<< HEAD
                                        <th>AKSI</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($table_form5 as $form5)
                                      <tr>
                                        <!-- <td>{{$form5->no_ptpp}}</td> -->
                                        <td>{{$form5->deskripsi_kondisi}}</td>
                                        <td>{{$form5->hasil_temuan}}</td>
                                        <td>{{$form5->kriteria}}</td>
                                        <td>{{$form5->akar_masalah}}</td>
                                        <td>{{$form5->akibat_resiko}}</td>
                                        <!-- <td>{{$form5->rekomendasi}}</td> -->
=======
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($table_form5 as $form5)
                  <tr>
                    <!-- <td>{{$form5->no_ptpp}}</td> -->
                    <td>{{$form5->deskripsi_kondisi}}</td>
                    <td>{{$form5->hasil_temuan}}</td>
                    <td>{{$form5->kriteria}}</td>
                    <td>{{$form5->akar_masalah}}</td>
                    <td>{{$form5->akibat_resiko}}</td>
                    <!-- <td>{{$form5->rekomendasi}}</td> -->
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
                    <!--  <td>{{$form5->tanggapan_audit}}</td>
                      <td>{{$form5->rencana_perbaikan}}</td> -->
                    <!--   <td>{{date('d F Y', strtotime($form5->jadwal_perbaikan))}}</td>
                      <td>{{$form5->pj_perbaikan}}</td> -->
                    <!--   <td>{{$form5->rencana_pencegahan}}</td>
                                        <td>{{date('d F Y', strtotime($form5->jadwal_pencegahan))}}</td>
                                        <td>{{$form5->pj_pencegahan}}</td> -->
<<<<<<< HEAD
                                        <td>
                      <!--    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detail">
                                           <i class="fa fa-eye"></i> Detail
                                         </button> -->
                                         <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editform5kjm" data-myid="{{$form5->id}}" data-myaudit="{{$form5->tanggal_audit}}" data-myprodi="{{$form5->id_prodi}}" data-myno="{{$form5->no_ptpp}}" data-mydes="{{$form5->deskripsi_kondisi}}" data-myhasil="{{$form5->hasil_temuan}}" data-mykriteria="{{$form5->kriteria}}" data-mymasalah="{{$form5->akar_masalah}}" data-myakibat="{{$form5->akibat_resiko}}" data-myrekom="{{$form5->rekomendasi}}" data-myjadwal="{{$form5->jadwal_perbaikan}}" data-mypj="{{$form5->pj_perbaikan}}">
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

                  <div class="modal fade" id="tambahform5kjm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Temuan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/form5/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                              <div class="col-lg-6">
                               <div class="form-group">
                                <label for="exampleFormControlSelect1">Jadwal Audit</label>
                                <select name="tgl_audit" class="form-control" id="tgl_audit">
                                  <option value="">Pilih Jadwal</option>
                                  @foreach($jadwal as $jdwl)
                                  <option id="jdwl-{{$jdwl->id_jadwal}}" value="{{$jdwl->id_jadwal}}" data-lokasi="{{$jdwl->lokasi}}">{{date('d F Y', strtotime($jdwl->tgl_audit))}} {{ $jdwl->prodi->nama_prodi}}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <input name="prodi" type="hidden" class="form-control" id="prodi" aria-describedby="emailHelp">
                              </div>
                         <!--      <div class="form-group">
                                <label for="exampleFormControlSelect1">Prodi</label>
                                <select name="prodi" class="form-control" id="prodi" required="">
                                  <option value="">Pilih Prodi</option>
                                  @foreach($prodi as $pr)
                                  <option value="{{ $pr->id}}">{{ $pr->nama_prodi}}</option>
                                  @endforeach
                                </select>
                              </div> -->
                              <div class="form-group">
                                <label for="no">No dan Klausul ISO</label>
                                <input name="no" type="text" class="form-control" id="no" aria-describedby="emailHelp" placeholder="Masukan Nomor dan Klausul ISO" required="">
                              </div>
                              <div class="form-group">
                                <label for="deskripsi">Deskripsi Kondisi</label>
                                <input name="deskripsi" type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp" placeholder="Masukan Deskripsi Kondisi">
                              </div>
                              <div class="form-group">
                                <label>Hasil /OB/KTS</label><br>
                                <input type="radio" id="ob" name="radio" value="OB" /> OB (Observasi)
                                <input type="radio" id="kts" name="radio" value="KTS" /> KTS (Ketidaksesuaian)
                              </div>
                              <div class="form-group">
                                <label>Kriteria</label><br>
                                <input type="radio" id="Mayor" name="radio2" value="Mayor" /> Mayor
                                <input type="radio" id="Minor" name="radio2" value="Minor" /> Minor
                              </div>
                              <div class="form-group">
                                <label for="masalah">Akar Masalah</label>
                                <textarea class="form-control" name="masalah" id="masalah" rows="3" placeholder="Masukan Akar Masalah"></textarea>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label for="akibat">Akibat (RESIKO)</label>
                                <!-- <input name="akibat" type="text" class="form-control" id="akibat" aria-describedby="emailHelp" placeholder="Masukan Akibat (RESIKO)"> -->
                                <textarea class="form-control" name="akibat" id="akibat" rows="3" placeholder="Masukan Akibat (RESIKO)"></textarea>

                              </div>
                              <div class="form-group">
                                <label for="rekom">Rekomendasi</label>
                                <!-- <input name="rekom" type="text" class="form-control" id="rekom" aria-describedby="emailHelp" placeholder="Masukan Rekomendasi"> -->
                                <textarea class="form-control" name="rekom" id="rekom" rows="3" placeholder="Masukan Rekomendasi"></textarea>

                              </div>
                              <div class="form-group">
                                <label for="jadwal">Jadwal Perbaikan</label>
                                <input name="jadwal" type="date" class="form-control" id="jadwal" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                <label for="gkm">Penanggung Jawab Perbaikan(GKM)</label>
                                <input name="gkm" type="text" class="form-control" id="gkm" aria-describedby="emailHelp" placeholder="Masukan Penanggung Jawaban Perbaikan(GKM)">
                              </div>
                              <div class="form-group">
                                <input name="status" type="hidden" class="form-control" id="status" value="Open" aria-describedby="emailHelp">
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

<!--                 <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>
</div>
</div>
</div> -->
<div class="modal fade" id="editform5kjm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
                    <td>
                      <!--    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detail">
                                           <i class="fa fa-eye"></i> Detail
                                         </button> -->
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit" data-myid="{{$form5->id}}" data-myaudit="{{$form5->tgl_audit}}" data-myprodi="{{$form5->id_prodi}}" data-myno="{{$form5->no_ptpp}}" data-mydes="{{$form5->deskripsi_kondisi}}" data-myhasil="{{$form5->hasil_temuan}}" data-mykriteria="{{$form5->kriteria}}" data-mymasalah="{{$form5->akar_masalah}}" data-myakibat="{{$form5->akibat_resiko}}" data-myrekom="{{$form5->rekomendasi}}" data-myjadwal="{{$form5->jadwal_perbaikan}}" data-mypj="{{$form5->pj_perbaikan}}">
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
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Temuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/form5/edit" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
<<<<<<< HEAD
          <div class="form-group">
           @foreach($table_form5 as $form5)
           <input name="id" type="hidden" class="form-control" id="id" value="{{$form5->id}}">
           @endforeach
         </div>
         <div class="row">
          <div class="col-lg-6">
           <div class="form-group">
            <label for="exampleFormControlSelect1">Jadwal Audit</label>
            <select name="tgl_audit" class="form-control" id="tgl_audit">
              <option value="">Pilih Jadwal</option>
              @foreach($jadwal as $jdwl)
              <option id="jdwl-{{$jdwl->id_jadwal}}" value="{{$jdwl->id_jadwal}}" data-lokasi="{{$jdwl->lokasi}}">{{date('d F Y', strtotime($jdwl->tgl_audit))}} {{ $jdwl->prodi->nama_prodi}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input name="prodi" type="hidden" class="form-control" id="prodi" aria-describedby="emailHelp">
          </div>
<!--             <div class="form-group">
              <label for="exampleFormControlSelect1">Prodi</label>
              <select name="prodi" class="form-control" id="prodi" required="">
                <option value="">Pilih Prodi</option>
                @foreach($prodi as $pr)
                <option value="{{ $pr->id}}">{{ $pr->nama_prodi}}</option>
                @endforeach
              </select>
            </div> -->
            <div class="form-group">
              <label for="no">No dan Klausul ISO</label>
              <input name="no" type="text" class="form-control" id="no" aria-describedby="emailHelp" placeholder="Masukan Nomor dan Klausul ISO" required="">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi Kondisi</label>
              <input name="deskripsi" type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp" placeholder="Masukan Deskripsi Kondisi">
            </div>
            <div class="form-group">
              <label>Hasil /OB/KTS</label><br>
              <input type="radio" id="ob" name="radio" value="OB" /> OB (Observasi)
              <input type="radio" id="kts" name="radio" value="KTS" /> KTS (Ketidaksesuaian)
            </div>
            <div class="form-group">
              <label>Kriteria</label><br>
              <input type="radio" id="Mayor" name="radio2" value="Mayor" /> Mayor
              <input type="radio" id="Minor" name="radio2" value="Minor" /> Minor
            </div>
            <div class="form-group">
              <label for="masalah">Akar Masalah</label>
              <!--  <input name="masalah" type="text" class="form-control" id="masalah" aria-describedby="emailHelp" placeholder="Masukan Akar Masalah"> -->
              <textarea class="form-control" name="masalah" id="masalah" rows="3" placeholder="Masukan Akar Masalah"></textarea>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="akibat">Akibat (RESIKO)</label>
              <!-- <input name="akibat" type="text" class="form-control" id="akibat" aria-describedby="emailHelp" placeholder="Masukan Akibat (RESIKO)"> -->
              <textarea class="form-control" name="akibat" id="akibat" rows="3" placeholder="Masukan Akibat (RESIKO)"></textarea>
            </div>
            <div class="form-group">
              <label for="rekom">Rekomendasi</label>
              <!-- <input name="rekom" type="text" class="form-control" id="rekom" aria-describedby="emailHelp" placeholder="Masukan Rekomendasi"> -->
              <textarea class="form-control" name="rekom" id="rekom" rows="3" placeholder="Masukan Rekomendasi"></textarea>

            </div>
            <div class="form-group">
              <label for="jadwal">Jadwal Perbaikan</label>
              <input name="jadwal" type="date" class="form-control" id="jadwal" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="gkm">Penanggung Jawab Perbaikan(GKM)</label>
              <input name="gkm" type="text" class="form-control" id="gkm" aria-describedby="emailHelp" placeholder="Masukan Penanggung Jawaban Perbaikan(GKM)">
            </div>
            <div class="form-group">
              <input name="status" type="hidden" class="form-control" id="status" value="Open" aria-describedby="emailHelp">
            </div>
          </div>
        </div>
=======
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jadwal Audit</label>
                <select name="tgl_audit" class="form-control" id="tgl_audit">
                  <option value="">Pilih Jadwal</option>
                  @foreach($jadwal as $jdwl)
                  <option value="{{$jdwl->id_jadwal}}">{{date('d F Y', strtotime($jdwl->tgl_audit))}}</option>
                  @endforeach
                </select>
              </div>
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
                <label>Hasil /OB/KTS</label><br>
                <input type="radio" id="ob" name="radio" value="OB" /> OB (Observasi)
                <input type="radio" id="kts" name="radio" value="KTS" /> KTS (Ketidaksesuaian)
              </div>
              <div class="form-group">
                <label>Kriteria</label><br>
                <input type="radio" id="Mayor" name="radio2" value="Mayor" /> Mayor
                <input type="radio" id="Minor" name="radio2" value="Minor" /> Minor
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="masalah">Akar Masalah</label>
                <!--  <input name="masalah" type="text" class="form-control" id="masalah" aria-describedby="emailHelp" placeholder="Masukan Akar Masalah"> -->
                <textarea class="form-control" name="masalah" id="masalah" rows="2" placeholder="Masukan Akar Masalah"></textarea>
              </div>
              <div class="form-group">
                <label for="akibat">Akibat (RESIKO)</label>
                <!-- <input name="akibat" type="text" class="form-control" id="akibat" aria-describedby="emailHelp" placeholder="Masukan Akibat (RESIKO)"> -->
                <textarea class="form-control" name="akibat" id="akibat" rows="2" placeholder="Masukan Akibat (RESIKO)"></textarea>

              </div>
              <div class="form-group">
                <label for="rekom">Rekomendasi</label>
                <!-- <input name="rekom" type="text" class="form-control" id="rekom" aria-describedby="emailHelp" placeholder="Masukan Rekomendasi"> -->
                <textarea class="form-control" name="rekom" id="rekom" rows="2" placeholder="Masukan Rekomendasi"></textarea>

              </div>
              <div class="form-group">
                <label for="jadwal">Jadwal Perbaikan</label>
                <input name="jadwal" type="date" class="form-control" id="jadwal" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="gkm">Penanggung Jawab Perbaikan(GKM)</label>
                <input name="gkm" type="text" class="form-control" id="gkm" aria-describedby="emailHelp" placeholder="Masukan Penanggung Jawaban Perbaikan(GKM)">
              </div>
              <div class="form-group">
                <input name="status" type="hidden" class="form-control" id="status" value="Open" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-info">Simpan</button>
      </form>
    </div>
  </div>
</div>
</div>
<<<<<<< HEAD
=======
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Temuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/form5/edit" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <input name="id" type="hidden" class="form-control" id="id" value="{{$form5->id}}">
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jadwal Audit</label>
                <select name="tgl_audit" class="form-control" id="tgl_audit">
                  <option value="">Pilih Jadwal</option>
                  @foreach($jadwal as $jdwl)
                  <option value="{{$jdwl->id_jadwal}}">{{date('d F Y', strtotime($jdwl->tgl_audit))}}</option>
                  @endforeach
                </select>
              </div>
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
                <label>Hasil /OB/KTS</label><br>
                <input type="radio" id="ob" name="radio" value="OB" /> OB (Observasi)
                <input type="radio" id="kts" name="radio" value="KTS" /> KTS (Ketidaksesuaian)
              </div>
              <div class="form-group">
                <label>Kriteria</label><br>
                <input type="radio" id="Mayor" name="radio2" value="Mayor" /> Mayor
                <input type="radio" id="Minor" name="radio2" value="Minor" /> Minor
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="masalah">Akar Masalah</label>
                <!--  <input name="masalah" type="text" class="form-control" id="masalah" aria-describedby="emailHelp" placeholder="Masukan Akar Masalah"> -->
                <textarea class="form-control" name="masalah" id="masalah" rows="2" placeholder="Masukan Akar Masalah"></textarea>
              </div>
              <div class="form-group">
                <label for="akibat">Akibat (RESIKO)</label>
                <!-- <input name="akibat" type="text" class="form-control" id="akibat" aria-describedby="emailHelp" placeholder="Masukan Akibat (RESIKO)"> -->
                <textarea class="form-control" name="akibat" id="akibat" rows="2" placeholder="Masukan Akibat (RESIKO)"></textarea>

              </div>
              <div class="form-group">
                <label for="rekom">Rekomendasi</label>
                <!-- <input name="rekom" type="text" class="form-control" id="rekom" aria-describedby="emailHelp" placeholder="Masukan Rekomendasi"> -->
                <textarea class="form-control" name="rekom" id="rekom" rows="2" placeholder="Masukan Rekomendasi"></textarea>

              </div>
              <div class="form-group">
                <label for="jadwal">Jadwal Perbaikan</label>
                <input name="jadwal" type="date" class="form-control" id="jadwal" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="gkm">Penanggung Jawab Perbaikan(GKM)</label>
                <input name="gkm" type="text" class="form-control" id="gkm" aria-describedby="emailHelp" placeholder="Masukan Penanggung Jawaban Perbaikan(GKM)">
              </div>
              <div class="form-group">
                <input name="status" type="hidden" class="form-control" id="status" value="Open" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-info">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
@endsection