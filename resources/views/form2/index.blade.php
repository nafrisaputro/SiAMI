@extends('layouts.form2')

@section('form2')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<section>
    <div class="container-fluid">
        <header>
            <h1 class="h1 display">Data Form 2</h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h1 display">Upload File Pendukung
                        </h1>
                    </div>
                    <div class="card-body">
                    <div class="nav-tabs-custom">
    							<ul class="nav nav-tabs">
    								<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">A</a></li>
    								<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">B</a></li>
    							</ul>
    						</br>
    						<div class="tab-content">
    							<div class="tab-pane active" id="tab_1">
    								
    									<div class="row">
    										<div class="col-md-6">
    											<div class="box box-primary">
    													@csrf
                                                    <br>
                                                    ini tab a
    												<div class="form-group">
    													<label >NIK</label>
    													<input required id="nik" name="NIK" type="number" class="form-control" id="">
    												</div>
    											</div>
    										</div>
    										<div class="col-md-6">
    											<div class="box box-primary">
    												<br>
    												<div class="form-group">
    													<label>Alamat</label>
    													<textarea required name="ALAMAT" class="form-control" rows="3" placeholder=""></textarea>
    												</div>          
    											</div>
    										</div>
    									</div>
    								</div>
    								<!-- /.tab-pane -->
    								<div class="tab-pane" id="tab_2">
                                    <div class="row">
    										<div class="col-md-6">
    											<div class="box box-primary">
    													@csrf
                                                    <br>
                                                    ini tab BAYU wardana
    												<div class="form-group">
    													<label >NIK</label>
    													<input required id="nik" name="NIK" type="number" class="form-control" id="">
    												</div>
    											</div>
    										</div>
    										<div class="col-md-6">
    											<div class="box box-primary">
    												<br>
    												<div class="form-group">
    													<label >NIK</label>
    													<input required id="nik" name="NIK" type="number" class="form-control" id="">
    												</div>          
    											</div>
    										</div>
    									</div>
    								</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection