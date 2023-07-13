<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">
                            {{ auth()->user()->name }}
                        </span>
                        <span class="text-secondary text-small">{{ Auth::user()->email }}</span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/rental') }}">
                    <span class="menu-title">Rental Mobil</span>
                    <i class="mdi mdi-clipboard menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/maintanance') }}">
                    <span class="menu-title">Daftar User</span>
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/mobil') }}">
                    <span class="menu-title">Daftar Mobil</span>
                    <i class="mdi mdi-car menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/merk') }}">
                    <span class="menu-title">Merk Mobil</span>
                    <i class="mdi mdi-checkbox-marked-outline menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/service') }}">
                    <span class="menu-title">Service Mobil</span>
                    <i class="mdi mdi-wrench menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/tipe-maintanance') }}">
                    <span class="menu-title">Tipe Service Mobil</span>
                    <i class="mdi mdi-yelp menu-icon"></i>
                </a>
            </li>

        </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
