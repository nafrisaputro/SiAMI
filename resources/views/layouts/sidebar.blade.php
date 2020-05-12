<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center"><img src="{{asset('images/'.auth()->user()->foto)}}" alt="person" class="img-fluid rounded-circle">
        <!-- <h2 class="h5">{{auth()->user()->nama}}</h2><span>{{auth()->user()->level}}</span> -->
<<<<<<< HEAD
        @if(auth()->user()->userslvl->jabatan == 'Ketua Program Studi')
        <h2 class="h5">{{auth()->user()->name}}</h2><span>{{auth()->user()->userslvl->jabatan}}</span><br>
        <span>{{auth()->user()->prodi->nama_prodi}}</span>

        @elseif(auth()->user()->userslvl->jabatan == 'Ketua Jurusan')
        <h2 class="h5">{{auth()->user()->name}}</h2><span>{{auth()->user()->userslvl->jabatan}}</span><br>
        <span>{{auth()->user()->jurusan->nama_jurusan}}</span>

        @else
        <h2 class="h5">{{auth()->user()->name}}</h2><span>{{auth()->user()->userslvl->jabatan}}</span>
=======
        @if(auth()->user()->level == 'Ketua Program Studi')
        <h2 class="h5">{{auth()->user()->nama}}</h2><span>{{auth()->user()->level}}</span><br>
        <span>{{auth()->user()->prodi->nama_prodi}}</span>
        @elseif(auth()->user()->level == 'Ketua Jurusan')
        <h2 class="h5">{{auth()->user()->nama}}</h2><span>{{auth()->user()->level}}</span><br>
        <span>{{auth()->user()->jurusan->nama_jurusan}}</span>
        @else
        <h2 class="h5">{{auth()->user()->nama}}</h2><span>{{auth()->user()->level}}</span>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
        @endif
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="/dashboard" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">M</strong><strong class="text-primary">I</strong></a></div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading">Main</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">

        @if(auth()->user()->userslvl->jabatan =="Super Admin")
        <li><a href="/coba/home"> <i class="icon-home"></i>Home</a></li>
        <li><a href="/coba"> <i class="icon-user"></i>User</a></li>
        <li><a href="/coba/userslvl"> <i class="icon-user"></i>User Level</a></li>
        <li><a href="/jurusan"> <i class="fa fa-building"></i>Jurusan</a></li>
        <li><a href="/prodi"> <i class="fa fa-book"></i>Prodi</a></li>

        @elseif(auth()->user()->userslvl->jabatan =="Staff KJM")
        <li><a href="/coba/homekjm"> <i class="icon-home"></i>Home</a></li>
        <li><a href="/jadwalaudit"> <i class="fa fa-calendar"></i>Jadwal Audit</a></li>
        <li><a href="#auditdropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file"></i>Audit</a>
          <ul id="auditdropdown" class="collapse list-unstyled ">
<<<<<<< HEAD
            <li><a href="/jadwal">Jadwal Audit Form 5</a></li>
=======
            <li><a href="/jadwal">Jadwal Audit</a></li>
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
            <li><a href="/form1form2">FORM 1 dan FORM 2</a></li>
            <li><a href="/form5">FORM 5</a></li>
            <li><a href="/ptpp">PTPP</a></li>
          </ul>
        </li>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Data</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="/form1form2/dataform1"> <i class="fa fa-folder"></i>Data FORM 1</a></li>
            <li><a href="/form1form2/dataform2"> <i class="fa fa-folder"></i>Data FORM 2</a></li>
          </ul>
        </div>

        @elseif(auth()->user()->userslvl->jabatan =="Ketua Jurusan")
        <li><a href="/coba/homekajur"> <i class="icon-home"></i>Home</a></li>
        <li><a href="/jadwalaudit/kajur"> <i class="fa fa-calendar"></i>Jadwal Audit</a></li>
        <li><a href="#auditdropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file"></i>Pencegahan</a>
          <ul id="auditdropdown" class="collapse list-unstyled ">
            <li><a href="/jadwal/kajur">Jadwal Audit Form 5</a></li>
            <li><a href="/form5/kajur">FORM 5</a></li>
            <li><a href="/ptpp/jurusan">PTPP</a></li>
          </ul>
        </li>

        @elseif(auth()->user()->userslvl->jabatan =="Ketua Program Studi")
        <li><a href="/coba/homekps"> <i class="icon-home"></i>Home</a></li>
        <li><a href="/jadwalaudit/kps"> <i class="fa fa-calendar"></i>Jadwal Audit</a></li>
        <li><a href="#auditdropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file"></i>Perbaikan</a>
          <ul id="auditdropdown" class="collapse list-unstyled">
            <li><a href="/jadwal/kps">Jadwal Audit Form 5</a></li>
            <li><a href="/form2">FORM 2</a></li>
            <li><a href="/form5/kps">FORM 5</a></li>
            <li><a href="/ptpp/prodi">PTPP</a></li>
          </ul>
        </li>
        <li><a href="/form2/histori"> <i class="icon-home"></i>Data Form 2</a></li>
<<<<<<< HEAD
        <!--           <div class="admin-menu">
          <h5 class="sidenav-heading">Data</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="/form1form2/dataform2"> <i class="fa fa-folder"></i>Data FORM 2</a></li>
          </ul>
        </div> -->
=======
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
        @endif
      </ul>
    </div>
  </div>
</nav>