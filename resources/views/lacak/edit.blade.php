<!DOCTYPE html>
<html class="no-js" lang="en">

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

  <!-- Edit -->
  <section>
    <div class="container my-5">
      <h2>Edit Pesanan</h2>
      <form action="{{ route('lacak.update', $pesanan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
          <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon', $pesanan->nomor_telepon) }}" required>
        </div>

        <div class="mb-3">
          <label for="nama_barang" class="form-label">Nama Barang/Jumlah</label>
          <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $pesanan->nama_barang) }}" required>
        </div>

        <div class="mb-3">
          <label for="Ukuran" class="form-label">Ukuran</label>
          <select class="form-select" id="Ukuran" name="Ukuran" required>
            <option value="Kecil" {{ old('Ukuran', $pesanan->Ukuran) == 'Kecil' ? 'selected' : '' }}>Kecil</option>
            <option value="Sedang" {{ old('Ukuran', $pesanan->Ukuran) == 'Sedang' ? 'selected' : '' }}>Sedang</option>
            <option value="Besar" {{ old('Ukuran', $pesanan->Ukuran) == 'Besar' ? 'selected' : '' }}>Besar</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="layanan" class="form-label">Layanan (Jalur Darat/Jalur Laut)</label>
           <input type="text" class="form-control" id="layanan" name="layanan" value="{{ old('layanan', $pesanan->layanan) }}" required>
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ old('alamat', $pesanan->alamat) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Pesanan</button>
      </form>
    </div>
  </section>
  <!-- Edit -->

  <!-- Start Scrollup -->
  <span class="cs_scrollup">
    <i class="flaticon-top"></i>
  </span>
  <!-- End Scrollup -->

  <!-- Start Footer -->
   @include('Layout.footer')
  <!-- End Footer -->


</body>
</html>


