<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengiriman;
use App\Models\layanan;

class lacakController extends Controller
{
    //
    public function index()
    {
        $pesanan = pengiriman::all();
        return view('lacak.index', compact('pesanan'));
    }

    public function edit($id)
    {
        $pesanan = pengiriman::find($id);
        if (!$pesanan) {
            abort(404, 'Data not found');
        }
        $layanans = layanan::all();
        return view('lacak.edit', compact('pesanan', 'layanans'));
    }
}
