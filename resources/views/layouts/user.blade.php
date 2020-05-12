<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data User</title>
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
            @yield('content')
            @yield('userlvl')
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
            $('#user').DataTable();
        });
    </script>
    <script src="{{asset('Admin/js/front.js')}}"></script>
<!--         <script type="text/javascript">
        $('#editexample').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var nama = button.data('mynama')
            var nip = button.data('mynip')
            var user = button.data('myuser')
            var pass = button.data('mypass')
            var level = button.data('mylevel')
            var prodi = button.data('myprodi')
            var jurusan = button.data('myjurusan')
            // var foto = button.data('myfoto')

            var modal = $(this)

            modal.find('.modal-body #nama').val(nama);
            modal.find('.modal-body #nip').val(nip);
            modal.find('.modal-body #username').val(user);
            modal.find('.modal-body #password').val(pass);
            modal.find('.modal-body #level').val(level);
            modal.find('.modal-body #prodi').val(prodi);
            modal.find('.modal-body #jurusan').val(jurusan);
            // modal.find('.modal-body #foto').val(foto);
        })
    </script> -->
    <script type="text/javascript">
    $(document).ready(function(){
        $('#level').on('change', function() {
          if ( this.value == '1')
          {
            $("#formprodi").hide();
            $("#formjurusan").show();
        }
        else if(this.value == '2')
        {
            $("#formjurusan").show();
            $("#formprodi").show();
        } else {
           $("#formprodi").hide();
           $("#formjurusan").hide();
       }
   });
    });
</script>
   <script type="text/javascript">
    $('#editlvl').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 
      var jabatan = button.data('myjabatan') 
      var id = button.data('myid') 

      var modal = $(this)

      modal.find('.modal-body #jabatan').val(jabatan);
      modal.find('.modal-body #id').val(id);
  })
</script>
</body>
</html>