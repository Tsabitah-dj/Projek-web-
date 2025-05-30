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
        $pesanan = pengiriman::with('layanan')->get();
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

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nomor_telepon' => 'required|string|max:20',
            'nama_barang' => 'required|string|max:255',
            'Ukuran' => 'required|in:Kecil,Sedang,Besar',
            'layanan_id' => 'required|integer',
            'alamat' => 'required|string',
        ]);

        $pesanan = pengiriman::findOrFail($id);
        $pesanan->update($validatedData);

        return redirect()->route('lacak.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $pesanan = pengiriman::findOrFail($id);
        $pesanan->delete();

        return redirect()->route('lacak.index')->with('success', 'Pesanan berhasil dihapus.');
    }

public function show($id)
{
    $pengiriman = pengiriman::with('layanan')->find($id);
    if (!$pengiriman) {
        abort(404, 'Data not found');
    }
    return view('lacak.show', compact('pengiriman'));
}
}
