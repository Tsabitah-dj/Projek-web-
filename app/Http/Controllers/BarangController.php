<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $barang = Barang::all();
        return view('Admin.barang.index',['barang'=>$barang]);
        return response()->json($barang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);

        // Create a new barang record
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
        ]);

        return response()->json([
            "message" => "Data sudah ada"
        ], 201);

        // Redirect to the index page with a success message
        return redirect()->route('barang.index')->with('success', 'Barang berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        // Retrieve the existing barang record
        return view('Admin.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang $barang)
    {
        if (Karyawan::where('id', $id)->exists()){
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);

        // Update the existing barang record
        $barang->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
        ]);

        return response()->json([
            'message' => 'Data berhasil diperbarui'
        ], 200);   
    }else {
        return response()->json([
            'message' => 'Data tidak ditemukan'
        ], 404);
    }

        // Redirect to the index page with a success message
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
    }
    public function destroy(barang $barang)
    {
        if (Barang::where('id', $id)->exists()){
        $barang->delete();

        // Redirect to the index page with a success message
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ], 202);
       }else{
        return response()->json([
            'message' => "Data tidak ditemukan"     
        ], 404);
       }
    }
}
