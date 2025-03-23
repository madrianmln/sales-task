<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        Produk::insert([
            ['nama_produk' => 'Kopi', 'jenis_produk_id' => 1, 'stok' => 100],
            ['nama_produk' => 'Teh', 'jenis_produk_id' => 1, 'stok' => 100],
            ['nama_produk' => 'Pasta Gigi', 'jenis_produk_id' => 2, 'stok' => 100],
            ['nama_produk' => 'Sabun Mandi', 'jenis_produk_id' => 2, 'stok' => 100],
            ['nama_produk' => 'Sampo', 'jenis_produk_id' => 2, 'stok' => 100],
        ]);
    }
}
