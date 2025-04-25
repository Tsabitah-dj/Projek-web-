<?php

namespace App\Http\Controllers;

use App\Models\Transportasi; // Updated model name
use App\Models\Karyawan;
use Illuminate\Http\Request;

class TransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transportasi = Transportasi::with('karyawan')->get(); // Eager load karyawan relationship
        return view('transportasi.index',['transportasi'=>$transportasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $karyawan = Karyawan::all(); // Retrieve all Karyawan records
        return view('transportasi.create', compact('karyawan')); // Pass Karyawan data to the view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kendaraan' => 'required|string|max:255',
            'nama_kendaraan' => 'required|string|max:255',
            'karyawan_id' => 'required|exists:karyawan,id',
        ]);

        Transportasi::create($request->all()); // Create a new Transportasi record

        return redirect()->route('transportasi.index')->with('success', 'Transportation data created successfully.'); // Redirect with success message
    }

    /**
     * Display the specified resource.
     */
    public function show(Transportasi $transportasi) // Updated model name
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transportasi $transportasi) // Updated model name
    {
        $karyawan = Karyawan::all(); // Retrieve all Karyawan records
        return view('transportasi.edit', compact('transportasi', 'karyawan')); // Pass Transportasi and Karyawan data to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transportasi $transportasi) // Updated model name
    {
        $request->validate([
            'kode_kendaraan' => 'required|string|max:255',
            'nama_kendaraan' => 'required|string|max:255',
            'karyawan_id' => 'required|exists:karyawan,id',
        ]);

        $transportasi->update($request->all()); // Update the existing Transportasi record

        return redirect()->route('transportasi.index')->with('success', 'Transportation data updated successfully.'); // Redirect with success message
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transportasi $transportasi) // Updated model name
    {
        $transportasi->delete(); // Delete the specified Transportasi record

        return redirect()->route('transportasi.index')->with('success', 'Transportation data deleted successfully.'); // Redirect with success message
    }
}
