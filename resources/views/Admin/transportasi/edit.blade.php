@extends('Layout.app')

@section('content')
<div class="container">
    <h1>Edit Data Transportasi</h1>
    <form action="{{ route('transportasi.update', $transportasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_kendaraan">Kode Kendaraan</label>
            <input type="text" class="form-control" id="kode_kendaraan" name="kode_kendaraan" value="{{ $transportasi->kode_kendaraan }}" required>
        </div>
        <div class="form-group">
            <label for="nama_kendaraan">Nama Kendaraan</label>
            <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" value="{{ $transportasi->nama_kendaraan }}" required>
        </div>
        <div class="form-group">
            <label for="karyawan_id">Karyawan</label>
            <select class="form-control" id="karyawan_id" name="karyawan_id" required>
                @foreach($karyawan as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $transportasi->karyawan_id ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('transportasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Data</title>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="{{asset('https://use.fontawesome.com/releases/v6.3.0/js/all.js')}}" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Tambah Barang</h3></div>
                                    <div class="card-body">
                                    <form action="{{ route('transportasi.update', $transportasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_kendaraan">Kode Kendaraan</label>
            <input type="text" class="form-control" id="kode_kendaraan" name="kode_kendaraan" value="{{ $transportasi->kode_kendaraan }}" required>
        </div>
        <div class="form-group">
            <label for="nama_kendaraan">Nama Kendaraan</label>
            <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" value="{{ $transportasi->nama_kendaraan }}" required>
        </div>
        <div class="form-group">
            <label for="karyawan_id">Karyawan</label>
            <select class="form-control" id="karyawan_id" name="karyawan_id" required>
                @foreach($karyawan as $karyawan)
                    <option value="{{ $karyawan->id }}" {{ $karyawan->id == $transportasi->karyawan_id ? 'selected' : '' }}>{{ $karyawan->nama_karyawan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('transportasi.index') }}" class="btn btn-secondary">Kembali</a>
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
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
