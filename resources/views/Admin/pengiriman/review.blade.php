<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pengiriman </title>
        <link href="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css')}}" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="{{asset('https://use.fontawesome.com/releases/v6.3.0/js/all.js')}}" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">System Panel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            @include('Admin/Layouts/side')
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Pengiriman</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pengiriman
                            </div>
                            <div class="card-body">
                            <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                    <form action="{{ route('pengiriman.store') }}" method="POST">
                                     @csrf
                                    <div class="mb-3">
                                       <label for="username" class="form-label">Username</label>
                                       <h5>{{ $pengiriman->username }}</h5>
                                          
                                    </div>

                                   <div class="mb-3">
                                       <label for="barang_id" class="form-label">Nama Barang</label>
                                       <h5>{{ $pengiriman->nama_barang }}</h5>
                                   </div>

                                  <div class="mb-3">
                                     <label for="jumlah" class="form-label">Jumlah Barang</label>
                                     <h5>{{ $pengiriman->jumlah }}</h5>
                               </div>

                               <div class="mb-3">
                                   <label for="nomor_telepon" class="form-label">Nomer Telepon</label>
                                   <h5>{{ $pengiriman->nomor_telepon }}</h5>
                               </div>

                               <div class="mb-3">
                                   <label for="ukuran" class="form-label">Ukuran Barang</label>
                                   <h5>{{ $pengiriman->Ukuran }}</h5>
                               </div>

                               <div class="mb-3">
                                   <label for="layanan" class="form-label">Layanan Yang Dipilih</label>
                                   <h5>{{ $pengiriman->layanan }}</h5>
                               </div>

                              <div class="mb-3">
                                 <label for="alamat" class="form-label">Alamat</label>
                                 <h5>{{ $pengiriman->alamat }}</h5>
                             </div>

                             <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('pengiriman.index') }}" class="btn btn-secondary">
                                         {{ __('Kembali') }}
                                    </a>       

                               </form>
                        </div>
                    </div>
                </main>
                <!-- footer -->
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; PPL 2</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                 <!-- footer -->
            </div>
        </div>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>

