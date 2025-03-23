<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        Barang::create([
            'nama_barang' => 'Kopi',
            'stok' => 100,
            'jumlah_terjual' => 10,
            'tanggal_transaksi' => '2021-05-01',
            'jenis_barang' => 'Konsumsi'
        ]);
    }
}

