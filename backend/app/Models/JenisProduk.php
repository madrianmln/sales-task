<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_jenis'];

    // Relasi ke Produk (One to Many)
    public function produks()
    {
        return $this->hasMany(Produk::class, 'jenis_produk_id');
    }
}
