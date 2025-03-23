<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        Transaksi::insert([
            ['produk_id' => 1, 'jumlah_terjual' => 10, 'tanggal_transaksi' => '2021-05-01'],
            ['produk_id' => 2, 'jumlah_terjual' => 19, 'tanggal_transaksi' => '2021-05-05'],
            ['produk_id' => 1, 'jumlah_terjual' => 15, 'tanggal_transaksi' => '2021-05-10'],
            ['produk_id' => 3, 'jumlah_terjual' => 20, 'tanggal_transaksi' => '2021-05-11'],
            ['produk_id' => 4, 'jumlah_terjual' => 30, 'tanggal_transaksi' => '2021-05-11'],
            ['produk_id' => 5, 'jumlah_terjual' => 25, 'tanggal_transaksi' => '2021-05-12'],
            ['produk_id' => 2, 'jumlah_terjual' => 5, 'tanggal_transaksi' => '2021-05-12'],
        ]);
    }
}
