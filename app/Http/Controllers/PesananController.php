<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengiriman;
use App\Models\Layanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('pesanan.index', compact('layanans'));
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
            'ukuran' => 'required|in:Kecil,Sedang,Besar',
            'layanan' => 'required|string|max:225',
            'alamat' => 'required|string',
        ]);

        Pengiriman::create($validatedData);

        return redirect()->route('lacak.index')->with('success', 'Pesanan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesanan = Pengiriman::findOrFail($id);
        return view('pesanan.show', compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pesanan = Pengiriman::findOrFail($id);
        $layanans = Layanan::all();
        return view('pesanan.edit', compact('pesanan', 'layanans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'nama_barang' => 'required|string|max:255',
            'ukuran' => 'required|in:Kecil,Sedang,Besar',
            'layanan' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        $pesanan = Pengiriman::findOrFail($id);
        $pesanan->update($validatedData);

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesanan = Pengiriman::findOrFail($id);
        $pesanan->delete();

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus.');
    }
}
