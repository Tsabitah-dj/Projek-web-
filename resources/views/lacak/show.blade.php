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
  <link rel="icon" href="{{ asset('assets/img/favicon.svg') }}" />
  <!-- Site Title -->
  <title>Perak Express</title>
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>

    <!-- Start Header Section -->
       @include('Layout/navbar')
    <!-- End Header Section -->

  <!-- Start Sidebar -->
    @include('Layout/sidebar')
  <!-- End Sidebar -->

   <!-- Start Common BreadCrumb -->
  <!-- End Common BreadCrumb -->

    <section>
        <div class="container mt-8 pt-6">
                 <div class="mb-4 row">
                     <label for="username" class="col-sm-4 col-form-label fw-bold">Username</label>
                     <div class="col-sm-8">
                         <p class="form-control-plaintext">{{ $pengiriman->username }}</p>
                     </div>
                 </div>
                      
                 <div class="mb-4 row">
                     <label for="nomor_telepon" class="col-sm-4 col-form-label fw-bold">Nomer Telepon</label>
                     <div class="col-sm-8">
                         <p class="form-control-plaintext">{{ $pengiriman->nomor_telepon }}</p>
                     </div>
                 </div>

                 <div class="mb-4 row">
                     <label for="barang_id" class="col-sm-4 col-form-label fw-bold">Nama Barang</label>
                     <div class="col-sm-8">
                         <p class="form-control-plaintext">{{ $pengiriman->nama_barang }}</p>
                     </div>
               </div>

                 <div class="mb-4 row">
                     <label for="ukuran" class="col-sm-4 col-form-label fw-bold">Ukuran Barang</label>
                     <div class="col-sm-8">
                         <p class="form-control-plaintext">{{ $pengiriman->Ukuran }}</p>
                     </div>
                 </div>

                 <div class="mb-4 row">
                     <label for="layanan" class="col-sm-4 col-form-label fw-bold">Layanan Yang Dipilih</label>
                     <div class="col-sm-8">
                         <p class="form-control-plaintext">{{ $pengiriman->layanan }}</p>
                     </div>
                 </div>

                 <div class="mb-4 row">
                     <label for="alamat" class="col-sm-4 col-form-label fw-bold">Alamat</label>
                     <div class="col-sm-8">
                         <p class="form-control-plaintext">{{ $pengiriman->alamat }}</p>
                     </div>
                 </div>

                 <div class="mb-3 row">
                     <div class="col-sm-8 offset-sm-4">
                         <a href="{{ route('lacak.index') }}" class="btn btn-secondary">
                             {{ __('Kembali') }}
                         </a>
                         <a href="{{ route('lacak.edit', $pengiriman->id) }}" class="btn btn-sm btn-primary">Edit</a>
                           <form action="{{ route('lacak.destroy', $pengiriman->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                     </div>
                 </div>
        </div>
    </section>
    

  <!-- Start Footer -->
@include('Layout.footer')
  <!-- End Footer -->

  <!-- Start Scrollup -->
  <span class="cs_scrollup">
    <i class="flaticon-top"></i>
  </span>
  <!-- End Scrollup -->

  <!-- Script -->
  <script src="{{ asset('assets/js/plugins/jquery-3.7.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/SplitText.min.js') }}"></script>
