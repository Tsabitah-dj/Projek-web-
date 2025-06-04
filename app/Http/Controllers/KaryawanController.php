<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('Admin.karyawan.index', ['karyawan' => $karyawan]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_karyawan' => 'required',
            'gaji_karyawan' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ], [
            'nip.required' => 'NIP tidak boleh kosong',
            'nama_karyawan.required' => 'Nama tidak boleh kosong',
            'gaji_karyawan.required' => 'Gaji tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
        ]);
        
       

        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        // Implement show logic if needed
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $karyawan = Karyawan::where('nip', $id)->first();
        return view('Admin.karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::where('nip', $id)->first();
        if (!$karyawan) {
            return redirect()->route('karyawan.index')->with('error', 'Karyawan tidak ditemukan');
        }

        if (Karyawan::where('id', $id)->exists()){
        $request->validate([
            'nip' => 'required',
            'nama_karyawan' => 'required',
            'gaji_karyawan' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ], [
            'nip.required' => 'NIP tidak boleh kosong',
            'nama_karyawan.required' => 'Nama tidak boleh kosong',
            'gaji_karyawan.required' => 'Gaji tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis kelamin tidak boleh kosong',
        ]);

    //     return response()->json([
    //         'message' => 'Data berhasil diperbarui'
    //     ], 200);   
    // }else {
    //     return response()->json([
    //         'message' => 'Data tidak ditemukan'
    //     ], 404);
    }

        $karyawan->update($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    
    {
        $karyawan = Karyawan::where('nip', $id)->first();
        if (!$karyawan) {
            return redirect()->route('karyawan.index')->with('error', 'Karyawan tidak ditemukan');
        }
        if (Pengiriman::where('id', $id)->exists()){
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus');

    //     return response()->json([
    //         'message' => 'Data berhasil dihapus'
    //     ], 202);
    //    }else{
    //     return response()->json([
    //         'message' => "Data tidak ditemukan"     
    //     ], 404);
       }
       
    }
}
