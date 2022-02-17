<ul class="navbar-nav bg-primary sidebar  sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon ">
            <img class="img-logo"
            src="{{asset('style/assets/img/logo_bps.png')}}">
        </div>
    </a>
    <li class="nav-item @yield('dashboard')"><a class="nav-link" href="/dashboard"><i class="fas fa-align-center"></i><span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
@if(auth()->user()->role == 'admin')
    <!-- Heading -->
    <div class="sidebar-heading">
        Administrasi
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @yield('pengolahan')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Pengolahan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengolahan:</h6>
                <a class="collapse-item" href="/mitra">Pengolahan Mitra</a>
                <a class="collapse-item" href="/supervisor">Pengolahan Supervisor</a>
                <a class="collapse-item" href="/kegiatan">Pengolahan Kegiatan</a>
            </div>
        </div>
    </li>
    
    <li class="nav-item @yield('user') ">
        <a class="nav-link collapsed" href="/user" >
            <i class="fas fa-fw fa-user-cog"></i>
            <span>User</span>
        </a>
    </li>
    <li class="nav-item @yield('kegiatanaktif')">
        <a class="nav-link collapsed" href="/kegiatanaktif" >
            <i class="fas fa-clipboard-list"></i>
            <span>Kegiatan Aktif</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Arsip
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @yield('arsip')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-archive"></i>
            <span>Arsip</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Arsip</h6>
                <a class="collapse-item" href="/arsipkegiatan">Arsip Kegiatan</a>
                
            </div>
        </div>
    </li>
   <hr class="sidebar-divider">

    <li class="nav-item @yield('about')">
        <a class="nav-link collapsed" href="/about" >
            <i class="fas fa-info-circle"></i>
            <span>About</span>
        </a>
    </li>
    <br>
    
@endif
@if(auth()->user()->role == 'supervisor')
    <!-- Heading -->
    <div class="sidebar-heading">
        Administrasi
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @yield('kegiatanaktif')">
        <a class="nav-link collapsed" href="/kegiatanaktif">
            <i class="fas fa-clipboard-list"></i>
            <span>Kegiatan Aktif</span>
        </a>
    </li>

    <li class="nav-item @yield('tambahmitra')">
        <a class="nav-link collapsed" href="/tambahmitra" >
            <i class="fas fa-user-plus"></i>
            <span>Tambah Mitra</span>
        </a>
    </li>
    <li class="nav-item @yield('arsip')">
        <a class="nav-link collapsed" href="/arsipkegiatan" >
            <i class="fas fa-archive"></i>
            <span>Arsip Kegiatan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
   
    <li class="nav-item @yield('about')">
        <a class="nav-link collapsed" href="/about" >
            <i class="fas fa-info-circle"></i>
            <span>About</span>
        </a>
    </li>
    <br>
@endif
@if(auth()->user()->role == 'mitra')
    <!-- Heading -->
    <div class="sidebar-heading">
        Administrasi
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @yield('jobdesk')">
        <a class="nav-link collapsed" href="/jobdesk" data-toggle="" data-target="#"
            aria-expanded="true" aria-controls="">
            <i class="fas fa-fw fa-table"></i>
            <span>Jobdesk</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <li class="nav-item @yield('about')">
        <a class="nav-link collapsed" href="/about" >
            <i class="fas fa-info-circle"></i>
            <span>About</span>
        </a>
    </li>
    <br>

    
@endif  

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://ars.ac.id">
            <div class="sidebar-brand-icon ">
                <img class="img-logo-ars"
                src="{{asset('style/assets/img/ars.png')}}">
            </div>
        </a>
        <br>
       <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
    </div>

    

</ul>