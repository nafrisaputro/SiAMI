<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Jurusan</title>
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

    <link rel="stylesheet" href="{{asset('Admin/vendor/new/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    @include('layouts.sidebar')

    <body>

        <div class="page">
            @include('layouts.navbar')
            @yield('jurusan')
            @include('layouts.footer')

        </div>


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
        <script src="{{asset('Admin/vendor/new/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('Admin/vendor/new/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <!-- Main File-->
        <script>
        $(document).ready(function() {
            $('#jurusan').DataTable();
        });
    </script>
    <script src="{{asset('Admin/js/front.js')}}"></script>
    <script type="text/javascript">
<<<<<<< HEAD
    $('#editjurusan').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 
      var jurusan = button.data('myjurusan') 
      var id = button.data('myid') 

      var modal = $(this)

      modal.find('.modal-body #nama_jurusan').val(jurusan);
      modal.find('.modal-body #id').val(id);
  })
</script>
=======
        $('#editModalLabel').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var jurusan = button.data('myjurusan')
            var id = button.data('myid')

            var modal = $(this)

            modal.find('.modal-body #nama_jurusan').val(jurusan);
            modal.find('.modal-body #id').val(id);
        })
    </script>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
</body>

</html>