<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from logihub.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2025 06:31:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Thememarch" />
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/favicon.svg" />
  <!-- Site Title -->
  <title>Perak Express</title>
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins/swiper.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <!-- Start Header Section -->
       @include('Layout/navbar')
    <!-- End Header Section -->

  <!-- Start Sidebar -->
    @include('Layout/sidebar')
  <!-- End Sidebar -->

 <!-- Halaman Cek Pesanan -->
    <section class="container my-5">
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
                                   <h5>{{ $pengiriman->layanan->nama_layanan }}</h5>
                               </div>

                              <div class="mb-3">
                                 <label for="alamat" class="form-label">Alamat</label>
                                 <h5>{{ $pengiriman->alamat }}</h5>
                             </div>

                             <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('lacak.index') }}" class="btn btn-secondary">
                                         {{ __('Kembali') }}
                                    </a>       

                               </form>
                        </div>
                    </div>
    </section>
  <!-- Akhir Halaman -->

</body>