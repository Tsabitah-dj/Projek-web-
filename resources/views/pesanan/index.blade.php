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

   <!-- Start Common BreadCrumb -->
  <section>
    <div class="cs-braidcrumb-wrap cs-bread-style-2">
      <div class="container">
        <div class="row cs_center">
          <div class="cs-bread-page-title-area">
            <div class="cs-page-title-in">
              <div class="cs-page-title">
                <h2>Buat Pesanan</h2>
              </div>
              <div class="breadcrumb">
                <ul class="cs_mp0">
                  <li>
                    <a href="index-2.html" class="cs-text_b_line"><span>Home</span></a>
                  </li>
                  <li>.</li>
                  <li>Tracking</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Common BreadCrumb -->

  <div class="container my-5">
    <h3>Buat Pesanan</h3>
    <form method="POST" action="{{ route('pesanan.store') }}">
      @csrf
      <div class="mb-3">
        <label for="username" class="form-label">Nama User</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Barang/Jumlah</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
      </div>
      <div class="mb-3">
        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
      </div>
      <div class="mb-3">
        <label for="Ukuran" class="form-label">Ukuran Barang</label>
       <select class="form-select" name="Ukuran" id="Ukuran">
  <option selected>select option</option>
  <option value="1">Kecil</option>
  <option value="2">Medium</option>
  <option value="3">Besar</option>
</select>
      </div>
      <div class="mb-3">
        <label for="layanan" class="form-label">Layanan</label>
      <select name="layanan_id" id="layanan_id" class="form-select" required>
            <option value="">Select option</option>
            @foreach($layanan as $layanan)
            <option value="{{ $layanan->id }}">{{ $layanan->nama_layanan }}</option>
            @endforeach
            </select>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
    </form>
  </div>

  <!-- Start Footer -->
@include('Layout.footer')
  <!-- End Footer -->

  <!-- Start Scrollup -->
  <span class="cs_scrollup">
    <i class="flaticon-top"></i>
  </span>
  <!-- End Scrollup -->

  <!-- Script -->
  <script src="assets/js/plugins/jquery-3.7.0.min.js"></script>
  <script src="assets/js/plugins/swiper.min.js"></script>
  <script src="assets/js/plugins/SplitText.min.js"></script>
  <script src="assets/js/plugins/ScrollToPlugin.min.js"></script>
  <script src="assets/js/plugins/ScrollTrigger.min.js"></script>
  <script src="assets/js/plugins/gsap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>