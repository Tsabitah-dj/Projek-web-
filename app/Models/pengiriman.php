<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengiriman';
    protected $primarykey = 'id';
    protected $fillable = ['username','barang_id','jumlah','alamat'];


    public function barang()
    {
        return $this->belongsTo('App\Models\barang');
    }
}

    