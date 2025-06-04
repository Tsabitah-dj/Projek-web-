<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SessionController; // Updated to follow naming conventions
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\TransportasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\lacakController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\CustomSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Dashboard');
})->name('Dashboard');

route::resource('Layanan', LayananController::class);
route::resource('lacak', lacakController::class);
route::resource('tentang', TentangController::class);
Route::resource('pesanan', PesananController::class);

// Admin Dashboard Routes
Route::get('/admin/layouts', [Admincontroller::class, 'showLayouts']);

Route::prefix('admin')->group(function() {
    Route::get('sesi', [Admincontroller::class, 'showSesi'])->name('sesi.index');
    Route::get('karyawan', [Admincontroller::class, 'showKaryawan'])->name('karyawan.index');
    Route::get('pengiriman', [Admincontroller::class, 'showPengiriman'])->name('pengiriman.index');

    Route::resource('karyawan', KaryawanController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('pengiriman', PengirimanController::class);
    Route::resource('transportasi', TransportasiController::class);
    Route::get('barang', [Admincontroller::class, 'showBarang'])->name('barang.index');
    Route::get('transportasi', [Admincontroller::class, 'showTransportasi'])->name('transportasi.index');
});

Route::get('/login', [CustomSessionController::class, 'index']);
Route::post('/login', [CustomSessionController::class, 'login']);
Route::get('/logout', [CustomSessionController::class, 'logout']);

Route::get('sesi', [SessionController::class, 'index']);
Route::post('sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
