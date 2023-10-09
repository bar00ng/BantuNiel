<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link text-center" style="text-decoration: none">
        {{-- <img src="../lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text fw-bold">SIMOOLTAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#"
                        class="nav-link {{ request()->segment('1') == '' || request()->segment('1') == 'kalkulasi' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Main Navigation
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/" class="nav-link {{ request()->segment('1') == '' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon ml-3"></i>
                                <p>Dashboard OLT</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/kalkulasi"
                                class="nav-link {{ request()->segment('1') == 'kalkulasi' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon ml-3"></i>
                                <p>Kalkulasi Card OLT</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/mini_olt"
                                class="nav-link {{ request()->segment('1') == 'mini_olt' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon ml-3"></i>
                                <p>Dashboard Mini OLT</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/tracking"
                                class="nav-link {{ request()->segment('1') == 'tracking' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon ml-3"></i>
                                <p>Tracking Card OLT</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Simple Link
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
