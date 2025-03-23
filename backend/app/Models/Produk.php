<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'jenis_produk_id', 'stok'];

    // Relasi ke JenisProduk (Many to One)
    public function jenisProduk()
    {
        return $this->belongsTo(JenisProduk::class, 'jenis_produk_id');
    }

    // Relasi ke Transaksi (One to Many)
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'produk_id');
    }
}
