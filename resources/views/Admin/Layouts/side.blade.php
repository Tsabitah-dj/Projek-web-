<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="sesi" onclick="return confirm('Anda Akan Logout')">Logout</a></li>

                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                           
                            <div class="sb-sidenav-menu-heading">Table</div>
                            <a class="nav-link" href="{{route('karyawan.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Karyawan  
                            </a>

                            <a class="nav-link" href="{{route('barang.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                barang
                            </a>

                            <a class="nav-link" href="{{route('pengiriman.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                pengiriman
                            </a>

                          
                            </a>
                        </div>
