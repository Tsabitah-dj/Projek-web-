<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transportasi extends Model
{
    use HasFactory;
    protected $table = 'transportasi';
    protected $fillable = ['kode_kendaraan','nama_kendaraan','barang_id','jumlah','karyawan_id'];

    public function karyawan()
    {
        return $this->belongsTo('App\Models\karyawan');
    }
}
