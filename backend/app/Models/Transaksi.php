<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['produk_id', 'jumlah_terjual', 'tanggal_transaksi'];

    // Relasi ke Produk (Many to One)
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
