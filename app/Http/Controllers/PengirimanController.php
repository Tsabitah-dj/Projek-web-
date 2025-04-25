<?php

namespace App\Http\Controllers;

use App\Models\pengiriman;
use App\Models\karyawan;
use App\Models\barang; 
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengiriman = pengiriman::all();
        return view('Admin.pengiriman.index',['pengiriman'=>$pengiriman]);
        return response()->json($pengiriman);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = barang::all();
        return view('Admin.pengiriman.create', compact( 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'username' => 'required|string|max:255',
            'barang_id' => 'required|exists:barang,id',
            'jumlah' => 'required|integer|min:1',
            'alamat' => 'required|string|max:255',
        ]);

        // Create a new pengiriman instance
        $pengiriman = new pengiriman();
        $pengiriman->username = $request->username;
        $pengiriman->barang_id = $request->barang_id;
        $pengiriman->jumlah = $request->jumlah;
        $pengiriman->alamat = $request->alamat;
        $pengiriman->save();

        return response()->json([
            "message" => "Data sudah ada"
        ], 201);

        // Redirect to index with success message
        return redirect()->route('pengiriman.index')->with('success', 'Data pengiriman berhasil disimpan.');
    }
    /**
     * Display the specified resource.
     */
    public function show(pengiriman $pengiriman)
    {
        return view('Admin.pengiriman.review', compact('pengiriman'));

        $pengiriman= Pengiriman::find($id);
        if (!empty($pengiriman)) 
        {
            return response()->json($pengiriman);
        }
       else{
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
       }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengiriman $pengiriman)
    {
        // Retrieve the existing pengiriman data
        $barang = barang::all();
        return view('Admin.pengiriman.edit', compact('pengiriman', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengiriman $pengiriman)
    {
        // Validate the incoming request data
        if (Pengiriman::where('id', $id)->exists()){
        $request->validate([
            'username' => 'required|string|max:225',
            'barang_id' => 'required|exists:barang,id',
            'jumlah' => 'required|integer|min:1',
            'alamat' => 'required|string|max:255',
        ]);

        // Update the existing pengiriman instance
        $pengiriman->username = $request->username;
        $pengiriman->barang_id = $request->barang_id;
        $pengiriman->jumlah = $request->jumlah;
        $pengiriman->alamat = $request->alamat;

        // Save the changes to the database
        $pengiriman->save();

        return response()->json([
            'message' => 'Data berhasil diperbarui'
        ], 200);   
    }else {
        return response()->json([
            'message' => 'Data tidak ditemukan'
        ], 404);
    }


        // Redirect to index with success message
        return redirect()->route('pengiriman.index')->with('success', 'Data pengiriman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengiriman $pengiriman)
    {
        if (Pengiriman::where('id', $id)->exists()){
        $pengiriman->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ], 202);
       }else{
        return response()->json([
            'message' => "Data tidak ditemukan"     
        ], 404);
       }

        return redirect()->route('pengiriman.index')->with('success', 'Data pengiriman berhasil dihapus.');
    }
}
