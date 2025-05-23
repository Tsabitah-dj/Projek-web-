<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table ='barang';
    // protected $primarykey ='kode_barang';
    protected $fillable =['nama_barang','harga'];

    public function pengiriman()
    {
        return $this->hasMany('App\Models\pengiriman');
    }
}
