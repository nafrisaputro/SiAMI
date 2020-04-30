@extends('layouts.form5')

@section('ptpp')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Audit</a></li>
            <li class="breadcrumb-item active">PTPP</li>
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
                        <h3>Permintaan Tindakan Perbaikan & Pencegahan (PTPP)
                            <button type="button" class="btn btn-warning float-right">
                                <i class="fa fa-print"></i> Print
                            </button>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="ptpp" class="table table-bordered">
                                <thead style="text-align: center">
                                    <tr>
                                        <th rowspan="2">NO</th>
                                        <th width="50px" rowspan="2">TEMUAN</td>
                                        <th width="50px" rowspan="2">PENYEBAB KETIDAKSESUAIAN</th>
                                        <th width="130px" rowspan="2">TINDAKAN PERBAIKAN</th>
                                        <th width="130px" rowspan="2">TINDAKAN PENCEGAHAN</th>
                                        <th colspan="2">PEMERIKSAAN</th>
                                    </tr>
                                    <tr>
                                        <td>DUE DATE</td>
                                        <td>STATUS</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($table_form5 as $form5)
                                    <tr>
                                        <td>{{$form5->id}}</td>
                                        <td>{{$form5->akar_masalah}}</td>
                                        <td>{{$form5->akibat_resiko}}</td>
                                        <td>{{$form5->tanggapan_audit}}</td>
                                        <td>{{$form5->rencana_perbaikan}}</td>
                                        <td>{{date('d F Y', strtotime($form5->jadwal_perbaikan))}}</td>
                                        <td>
                                            {{$form5->status}}
                                            <form method="POST" action="/ptpp/{{$form5->id}}/btn">
                                                {{csrf_field()}}
                                                @if($form5->status == 'Close')
                                                <input name="btn" value="Open" type="hidden">
                                                <button class="btn btn-info btn-sm" type="submit"> Open</button>
                                                @else
                                                <input name="btn" value="Close" type="hidden">
                                                <button class="btn btn-info btn-sm" type="submit"> Close</button>
                                                @endif
                                            </form>
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
@endsection