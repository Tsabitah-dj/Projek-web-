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
    <section>
        <div class="container my-5">
            <h3>Data Pesanan</h3>
           
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Barang/Jumlah</th>
                        <th>Ukuran Barang</th>
                        <th>Jenis Layanan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pesanan as $item)
                    <tr>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->Ukuran }}</td>
                        <td>{{ $item->layanan }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="{{ route('lacak.show', $item->id) }}" class="btn btn-sm btn-success">Review</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">anda Belum Membuat Pesanan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
  <!-- Akhir Halaman -->

<!-- Start Footer -->
   @include('Layout.footer')
  <!-- End Footer -->

</body>
</html>