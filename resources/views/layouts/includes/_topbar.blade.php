<nav class="navbar navbar-expand navbar-light bg-light-dashboard topbar mb-4 shadow-sm static-top ">
    <!-- <div class="ml-auto">
        <h4 class="m-0 font-weight-normal text-primary ">SISTEM INFORMASI MITRA</h4>
    </div>-->

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">


        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            @if(auth()->user()->role == 'supervisor')
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->supervisor->nama}}</span>
                <img class="img-profile rounded-circle" src="{{asset('style/assets/img/undraw_profile.svg')}}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="/profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>@endif

                @if(auth()->user()->role == 'mitra')
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->mitra->nama}} </span>
                    <img class="img-profile rounded-circle" src="{{asset('style/assets/img/undraw_profile.svg')}}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                    <a class="dropdown-item" href="/profilemitra">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>@endif
                    @if(auth()->user()->role == 'admin')
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin </span>
                        <img class="img-profile rounded-circle" src="{{asset('style/assets/img/undraw_profile.svg')}}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="/admin/{{auth()->user()->id }}/gantipassword">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Ganti Password
                        </a>@endif

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
        </li>


    </ul>

</nav>
