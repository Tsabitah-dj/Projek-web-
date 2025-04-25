<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class Admincontroller extends Controller
{
    public function showLayouts()
    {
        return view('Admin.Layouts.app'); 
    }

    public function showSesi()
    {
        return view('Admin.sesi.index');
    }

    public function showKaryawan()
    {
        return view('Admin.karyawan.index');
    }

    public function showPengiriman()
    {
        return view('Admin.pengiriman.index');
    }

    public function showBarang()
    {
        $barang = barang::all();
        return view('Admin.barang.index', ['barang' => $barang]);
    }

    public function showTransportasi()
    {
        return view('Admin.transportasi.index');
    }
}
