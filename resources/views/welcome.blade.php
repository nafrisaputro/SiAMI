<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Audit Mutu Internal</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="{{asset('Admin/vendor/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="{{asset('Admin/vendor/font-awesome/css/font-awesome.min.css')}}">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="{{asset('Admin/css/fontastic.css')}}">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- jQuery Circle-->
  <link rel="stylesheet" href="{{asset('Admin/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="{{asset('Admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="{{asset('Admin/css/style.default.css')}}" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="{{asset('Admin/css/custom.css')}}">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('Admin/img/favicon.ico')}}">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>

         
    <h2>Sistem Informasi Audit Mutu Internal</h2><br>
    <h2>Politeknik Negeri Malang</h2>
  <div class="page login-page">
       <div class="container">
        <div class="row">
        <div class="col-md-8">
          <!-- <div class="form-outer text-center d-flex align-items-center">  -->
          <img src="{{asset('Admin/img/ami/logo.png')}}" style="width: 250px; height: 250px; margin-top: 170px;margin-left: 230px;margin-bottom: 30px">
          <div class="logo text-uppercase" style="text-align: center;">
          <h3>Sistem Informasi Audit Mutu Internal</h3>
          <h3>Politeknik Negeri Malang</h3>
          </div>
        <!-- </div> -->
        </div>
        <div class="col-lg-4">
          <div class="form-inner" style="margin-top: 150px; margin-bottom: 150px;">
          <div class="logo text-uppercase" style="text-align: center;"><span>Login </span></div>
          <form class="text-left form-validate" action="/postlogin" method="POST" >
          {{csrf_field()}}
            <div class="form-group-material">
              <input id="nip" type="text" name="nip" required data-msg="Masukan NIP" class="input-material">
              <label for="nip" class="label-material">NIP</label>
            </div>
            <div class="form-group-material">
              <input id="password" type="password" name="password" required data-msg="Masukkan Password" class="input-material">
              <label for="password" class="label-material">Password</label>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Login</button>
              </a>
            </div>
          </form>
        </div>
        </div>
        </div>
      </div>
        </div>
  </div>
   <!-- <div class="form-outer text-center d-flex align-items-center">                  </div>  -->

  <!-- JavaScript files-->
  <script src="{{asset('Admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Admin/vendor/popper.js/umd/popper.min.js')}}"> </script>
  <script src="{{asset('Admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('Admin/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
  <script src="{{asset('Admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
  <script src="{{asset('Admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('Admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('Admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{asset('Admin/js/charts-home.js')}}"></script>
  <!-- Main File-->
  <script src="{{asset('Admin/js/front.js')}}"></script>
</body>

</html>