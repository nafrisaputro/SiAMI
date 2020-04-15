<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center"><img src="{{asset('images/'.auth()->user()->foto)}}" alt="person" class="img-fluid rounded-circle">
        <h2 class="h5">{{auth()->user()->nama}}</h2><span>{{auth()->user()->level}}</span>
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="/dashboard" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">M</strong><strong class="text-primary">I</strong></a></div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading">Main</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">

       @if(auth()->user()->level=="Admin")
       <li><a href="/dashboard"> <i class="icon-home"></i>Home</a></li>
       <li><a href="#auditdropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-table"></i>Audit</a>
       <ul id="auditdropdown" class="collapse list-unstyled">
         <li><a href="#">FORM 1 dan FORM 2</a></li>
         <li><a href="/form5">FORM 5</a></li>
         <li><a href="#">PTPP</a></li>
       </ul>
     </li>
     <li><a href="/coba"> <i class="icon-user"></i>User</a></li>
     <li><a href="/jurusan"> <i class="fa fa-building"></i>Jurusan</a></li>
     <li><a href="/prodi"> <i class="fa fa-book"></i>Prodi</a></li>

     @elseif(auth()->user()->level=="Kantor Penjaminan Mutu")
     <li><a href="/dashboard"> <i class="icon-home"></i>Home</a></li>
     <li ><a href="#auditdropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-table"></i>Audit</a>
     <ul id="auditdropdown" class="collapse list-unstyled ">
       <li><a href="/form1form2" >FORM 1 dan FORM 2</a></li>
       <li><a href="/form5">FORM 5</a></li>
       <li><a href="/ptpp">PTPP</a></li>
     </ul>
   </li>
   <div class="admin-menu">
    <h5 class="sidenav-heading">Data</h5>
    <ul id="side-main-menu" class="side-menu list-unstyled">
      <li><a href="/form1form2/dataform1" > <i class="icon-home"></i>Data FORM 1</a></li>
      <li><a href="/form1form2/dataform2"> <i class="icon-home"></i>Data FORM 2</a></li>
    </ul>
  </div>

  @elseif(auth()->user()->level=="Ketua Jurusan")
  <li><a href="/dashboard"> <i class="icon-home"></i>Home</a></li>
  <li><a href="#auditdropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-table"></i>Pencegahan</a>
  <ul id="auditdropdown" class="collapse list-unstyled ">
   <li><a href="/form5/kajur">FORM 5</a></li>
   <li><a href="/ptpp/jurusan">PTPP</a></li>
 </ul>
</li>

@elseif(auth()->user()->level=="Ketua Program Studi")
<li><a href="/dashboard"> <i class="icon-home"></i>Home</a></li>
<li><a href="#auditdropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-table"></i>Perbaikan</a>
<ul id="auditdropdown" class="collapse list-unstyled">
 <li><a href="/form2">FORM 2</a></li>
 <li><a href="/form5/kps">FORM 5</a></li>
 <li><a href="/ptpp/prodi">PTPP</a></li>
</ul>
</li>
@endif

</ul>
</div>
<!-- <div class="admin-menu">
    <h5 class="sidenav-heading">Data</h5>
    <ul id="side-main-menu" class="side-menu list-unstyled">
        <li><a href="/form1form2/"> <i class="icon-home"></i>Data FORM 1</a></li>
        <li><a href="/form1form2/"> <i class="icon-home"></i>Data FORM 2</a></li>
    </ul>
  </div> -->
</div>
</nav>