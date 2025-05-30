<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengiriman;
use App\Models\layanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $layanan = layanan::all();
        return view('pesanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'Ukuran' => 'required|in:1,2,3',
            'layanan_id' => 'required|integer',
            'alamat' => 'required|string',
        ]);

        pengiriman::create($validatedData);

        return redirect()->route('lacak.index')->with('success', 'Pesanan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesanan = pengiriman::findOrFail($id);
        return view('pesanan.show', compact('pesanan'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pesanan = pengiriman::findOrFail($id);
        $layanans = layanan::all();
        return view('lacak.edit', compact('pesanan', 'layanans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'nomor_telepon' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'Ukuran' => 'required|in:Kecil,Sedang,Besar',
            'layanan_id' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        $pesanan = pengiriman::findOrFail($id);
        $pesanan->update($validatedData);

        return redirect()->route('lacak.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = pengiriman::findOrFail($id);
        $pesanan->delete();

        return redirect()->route('lacak.index')->with('success', 'Pesanan berhasil dihapus.');
    }
}
