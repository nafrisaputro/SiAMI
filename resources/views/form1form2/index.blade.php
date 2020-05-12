@extends('layouts.form1form2')

@section('form1form2')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Audit</a></li>
      <li class="breadcrumb-item active">Form 1 dan Form 2</li>
    </ul>
  </div>
</div>
<section class="forms">
  <div class="container-fluid">
    <!-- Page Header-->
<<<<<<< HEAD
    <br>
=======
    <header>
      <h1 class="h3 display">Form 1 dan Form 2</h1>
    </header>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
    <div class="row">
      <div class="col-lg-5">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h3>Form 1 Audit Checklist</h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead style="text-align: center">
                <tr>
                  <th colspan="2">Auditi</th>
                  <th colspan="2">Ruang Lingkup</td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td colspan="2"></td>
                </tr>
                <tr>
                  <th>Tanggal</th>
                  <th colspan="2"> Lokasi</th>
                  <th>Auditor</th>
                </tr>
                <tr>
                  <td></td>
                  <td colspan="2"></td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
            <div id="card-1">
              <div class="card">
                <div class="card-header">
                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-1" href="#card-element-11">A.KONDISI EKSTERNAL</a>
                </div>
                <div id="card-element-11" class="collapse">
                  <div class="card-body">
                    <table class="table table-bordered">
                      @foreach($table_form1 as $form1 )
                      @if ($form1->ruang_lingkup == 'A.KONDISI EKSTERNAL')
                      <tr>
                      </tr>
                      <tr>
                        <td> {{$form1->no}}</td>
                        <td> {!! $form1->pertanyaan !!}</td>
                      </tr>
                      @endif
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div id="card-2">
              <div class="card">
                <div class="card-header">
                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-2" href="#card-element-21">B.PROFIL INSTITUSI</a>
                </div>
                <div id="card-element-21" class="collapse">
                  <div class="card-body">
                    <table class="table table-bordered">
                      @foreach($table_form1 as $form1)
                      @if ($form1->ruang_lingkup == 'B.PROFIL INSTITUSI')
                      <tr>
                      </tr>
                      <tr>
                        <td> {{$form1->no}}</td>
                        <td> {!! $form1->pertanyaan !!}</td>
                      </tr>
                      @endif
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div id="card-3">
              <div class="card">
                <div class="card-header">
                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-3" href="#card-element-31">C.KRITERIA</a>
                </div>
                <div id="card-element-31" class="collapse">
                  <div class="card-body">
                    <!-- --------------------------------collapse sub --------------------------------------- -->
                    <div id="card-311">
                      <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-311" href="#card-element-311">1.VISI, MISI, TUJUAN, STRATEGI</a>
                      </div>
                      <div id="card-element-311" class="collapse">
                        <div class="card-body">
                          <table class="table table-bordered">
                            @foreach($table_form1 as $form1)
                            @if ($form1->ruang_lingkup == 'C.KRITERIA' && $form1->sub_ruang_lingkup == '1.VISI, MISI, TUJUAN, STRATEGI')
                            <tr>
                              <td> {{$form1->no}}</td>
                              <td> {!! $form1->pertanyaan !!}</td>
                            </tr>
                            @endif
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="card-321">
                      <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-321" href="#card-element-321">2.TATA PAMONG, TATA KELOLA, DAN KERJASAMA</a>
                      </div>
                      <div id="card-element-321" class="collapse">
                        <div class="card-body">
                          <table class="table table-bordered">
                            @foreach($table_form1 as $form1)
                            @if ($form1->ruang_lingkup == 'C.KRITERIA' && $form1->sub_ruang_lingkup == '2.TATA PAMONG, TATA KELOLA, DAN KERJASAMA')
                            <tr>
                              <td> {{$form1->no}}</td>
                              <td> {!! $form1->pertanyaan !!}</td>
                            </tr>
                            @endif
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="card-331">
                      <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-331" href="#card-element-331">3.MAHASISWA</a>
                      </div>
                      <div id="card-element-331" class="collapse">
                        <div class="card-body">
                          <table class="table table-bordered">
                            @foreach($table_form1 as $form1)
                            @if ($form1->ruang_lingkup == 'C.KRITERIA' && $form1->sub_ruang_lingkup == '3.MAHASISWA')
                            <tr>
                              <td> {{$form1->no}}</td>
                              <td> {!! $form1->pertanyaan !!}</td>
                            </tr>
                            @endif
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="card-341">
                      <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-341" href="#card-element-341">4.SUMBER DAYA MANUSIA</a>
                      </div>
                      <div id="card-element-341" class="collapse">
                        <div class="card-body">
                          <table class="table table-bordered">
                            @foreach($table_form1 as $form1)
                            @if ($form1->ruang_lingkup == 'C.KRITERIA' && $form1->sub_ruang_lingkup == '4.SUMBER DAYA MANUSIA')
                            <tr>
                              <td> {{$form1->no}}</td>
                              <td> {!! $form1->pertanyaan !!}</td>
                            </tr>
                            @endif
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="card-351">
                      <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-351" href="#card-element-351">5.KEUANGAN, SARANA PRASARANA</a>
                      </div>
                      <div id="card-element-351" class="collapse">
                        <div class="card-body">
                          <table class="table table-bordered">
                            @foreach($table_form1 as $form1)
                            @if ($form1->ruang_lingkup == 'C.KRITERIA' && $form1->sub_ruang_lingkup == '5.KEUANGAN, SARANA PRASARANA')
                            <tr>
                              <td> {{$form1->no}}</td>
                              <td> {!! $form1->pertanyaan !!}</td>
                            </tr>
                            @endif
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="card-361">
                      <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-361" href="#card-element-361">6.PENDIDIKAN</a>
                      </div>
                      <div id="card-element-361" class="collapse">
                        <div class="card-body">
                          <table class="table table-bordered">
                            @foreach($table_form1 as $form1)
                            @if ($form1->ruang_lingkup == 'C.KRITERIA' && $form1->sub_ruang_lingkup == '6.PENDIDIKAN')
                            <tr>
                              <td> {{$form1->no}}</td>
                              <td> {!! $form1->pertanyaan !!}</td>
                            </tr>
                            @endif
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="card-371">
                      <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-371" href="#card-element-371">7.PENELITIAN</a>
                      </div>
                      <div id="card-element-371" class="collapse">
                        <div class="card-body">
                          <table class="table table-bordered">
                            @foreach($table_form1 as $form1)
                            @if ($form1->ruang_lingkup == 'C.KRITERIA' && $form1->sub_ruang_lingkup == '7.PENELITIAN')
                            <tr>
                              <td> {{$form1->no}}</td>
                              <td> {!! $form1->pertanyaan !!}</td>
                            </tr>
                            @endif
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="card-381">
                      <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-381" href="#card-element-381">8.PENGABDIAN KEPADA MASYARAKAT</a>
                      </div>
                      <div id="card-element-381" class="collapse">
                        <div class="card-body">
                          <table class="table table-bordered">
                            @foreach($table_form1 as $form1)
                            @if ($form1->ruang_lingkup == 'C.KRITERIA' && $form1->sub_ruang_lingkup == '8.PENGABDIAN KEPADA MASYARAKAT')
                            <tr>
                              <td> {{$form1->no}}</td>
                              <td> {!! $form1->pertanyaan !!}</td>
                            </tr>
                            @endif
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="card-391">
                      <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-391" href="#card-element-391">9.LUARAN DAN CAPAIAN TRIDHARMA</a>
                      </div>
                      <div id="card-element-391" class="collapse">
                        <div class="card-body">
                          <table class="table table-bordered">
                            @foreach($table_form1 as $form1)
                            @if ($form1->ruang_lingkup == 'C.KRITERIA' && $form1->sub_ruang_lingkup == '9.LUARAN DAN CAPAIAN TRIDHARMA')
                            <tr>
                              <td> {{$form1->no}}</td>
                              <td> {!! $form1->pertanyaan !!}</td>
                            </tr>
                            @endif
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- -------------------------------------------------------- -->
                  </div>
                </div>
              </div>
            </div>
            <div id="card-4">
              <div class="card">
                <div class="card-header">
                  <a class="card-link collapsed" data-toggle="collapse" data-parent="#card-4" href="#card-element-41">D.ANALISIS DAN PENETAPAN PROGRAM PENGEMBANGAN</a>
                </div>
                <div id="card-element-41" class="collapse">
                  <div class="card-body">
                    <table class="table table-bordered">
                      @foreach($table_form1 as $form1)
                      @if ($form1->ruang_lingkup == 'D.ANALISIS DAN PENETAPAN PROGRAM PENGEMBANGAN')
                      <tr>
                        <td></td>
                        <td>{{$form1->sub_ruang_lingkup}}</td>
                      </tr>
                      <tr>
                        <td> {{$form1->no}}</td>
                        <td> {!! $form1->pertanyaan !!}</td>
                      </tr>
                      @endif
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card">
          <div class="card-header d-flex align-items-center">
<<<<<<< HEAD
            <h3>Form 2 Daftar Kelengkapan Dokumen</h3>
=======
            <h4>Form 2 Daftar Kelengkapan Dokumen</h4>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
          </div>
          <div class="card-body text-center">
            <div class="table-responsive">
              <table id="table2" class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Elemen</th>
                    <th>Sub Elemen</th>
                    <th>Nama Dokumen</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0; ?>
                  @foreach($table_form2 as $form2)
                  <?php $no++; ?>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$form2->elemen}}</td>
                    <td>{{$form2->sub_elemen}}</td>
                    <td><a href="/form2/{{$form2->nama_dokumen}}/download"">{{$form2->nama_dokumen}}</a></td>
<<<<<<< HEAD
                    <td>{!! $form2->keterangan !!}</td>
=======
                    <td>{{$form2->keterangan}}</td>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
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