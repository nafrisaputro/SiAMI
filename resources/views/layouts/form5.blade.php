<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form 5 PTPP</title>
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
        <link rel="stylesheet" href="{{asset('Admin/vendor/new/datatables-bs4/css/dataTables.bootstrap4.css')}}">

      </head>
      @include('layouts.sidebar')

      <body>

        <div class="page">
          @include('layouts.navbar')
          @yield('form5ptpp')
          @yield('ptpp')
          @yield('jurusan')
          @yield('prodi')
          @yield('kajur')
          @yield('kps')
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
        <!-- Main File-->
        <script src="{{asset('Admin/js/front.js')}}"></script>
        <!-- tambahan script -->
        <script src="{{asset('Admin/vendor/new/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('Admin/vendor/new/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script>
        $(document).ready(function() {
          $('#ptpp').DataTable();
          $('#table5').DataTable();
          $('#jurusan').DataTable();
        });
      </script>
<!--       <script type="text/javascript">
      $(document).ready(function() {
        $(document).on('change', '#tgl_audit', function() {
        var id_prodi =  $('#tgl_audit').val();     // get id the value from the select
        $('#prodi').val(id_prodi);   // set the textbox value
      });
      });
    </script> -->
    <script type="text/javascript">
    window.onload = function(){
     $("#tgl_audit").change(function () {
       var ambillokasi = $("#jdwl-"+this.value).data('lokasi');
       $("#prodi").val(ambillokasi);
     });
   }
 </script>

 <script type="text/javascript">
 $('#editform5kjm').on('show.bs.modal', function(event) {

  var button = $(event.relatedTarget)

  var audit = button.data('myaudit')
  var prodi = button.data('myprodi')
  var no = button.data('myno')
  var des = button.data('mydes')
  var hasil = button.data('myhasil')
  $('input[name="radio"][value="' + hasil + '"]').prop('checked', true);
  var kriteria = button.data('mykriteria')
  $('input[name="radio2"][value="' + kriteria + '"]').prop('checked', true)
  var masalah = button.data('mymasalah')
  var akibat = button.data('myakibat')
  var rekom = button.data('myrekom')
  var jadwal = button.data('myjadwal')
  var pj = button.data('mypj')
  var id = button.data('myid') 

  var modal = $(this)

  modal.find('.modal-body #tgl_audit').val(audit);
  modal.find('.modal-body #prodi').val(prodi);
  modal.find('.modal-body #no').val(no);
  modal.find('.modal-body #deskripsi').val(des);
  modal.find('.modal-body #masalah').val(masalah);
  modal.find('.modal-body #akibat').val(akibat);
  modal.find('.modal-body #rekom').val(rekom);
  modal.find('.modal-body #jadwal').val(jadwal);
  modal.find('.modal-body #gkm').val(pj);
  modal.find('.modal-body #id').val(id);
})

 $('#editform5kps').on('show.bs.modal', function(event) {

  var button = $(event.relatedTarget)

  var tanggap = button.data('mytanggap')
  var rencana = button.data('myrencana')
  var id = button.data('myid') 

  var modal = $(this)

  modal.find('.modal-body #auditi').val(tanggap);
  modal.find('.modal-body #perbaikan').val(rencana);
  modal.find('.modal-body #id').val(id);
})

 $('#editform5kajur').on('show.bs.modal', function(event) {

  var button = $(event.relatedTarget)

  var pencegahan = button.data('mypencegahan')
  var jadwal = button.data('myjadwal')
  var pj = button.data('mypj')
  var id = button.data('myid') 

  var modal = $(this)

  modal.find('.modal-body #pencegahan').val(pencegahan);
  modal.find('.modal-body #jadwal').val(jadwal);
  modal.find('.modal-body #pj').val(pj);
  modal.find('.modal-body #id').val(id);
})
     $('.filter-satuan').change(function () {
        ptpp.column( $(this).data('column'))
        .search( $(this).val() )
        .draw();
    });
</script>
</body>

</html>