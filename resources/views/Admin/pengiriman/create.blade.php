<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Data</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Tambah Barang</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('pengiriman.store') }}" method="POST">
                                          @csrf
      <div class="mb-3">
        <label for="username" class="form-label">Nama User</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Barang</label>
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
                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Simpan') }}
                                                    </button>
                                                    <a href="{{ route('pengiriman.index') }}" class="btn btn-secondary">
                                                        {{ __('Kembali') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; XI PPL 2</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
