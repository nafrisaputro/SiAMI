@extends('dashboard')

@section('homeadmin')

<div class="breadcrumb-holder">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Home</li>
  </ul>
</div>
</div>

  <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row"">
            <!-- Count item widget-->
            <div class="col-xl-4 col-md-4 col-4">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">User</strong><span>Total User</span>
                  <div class="count-number"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-4">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-university"></i></div>
                <div class="name"><strong class="text-uppercase">Jurusan</strong><span>Total Jurusan</span>
                  <div class="count-number">25</div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 col-4">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-building"></i></div>
                <div class="name"><strong class="text-uppercase">Prodi</strong><span>Total Prodi</span>
                  <div class="count-number">25</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection