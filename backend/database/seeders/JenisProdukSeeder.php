<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisProduk;

class JenisProdukSeeder extends Seeder
{
    public function run()
    {
        JenisProduk::insert([
            ['nama_jenis' => 'Konsumsi'],
            ['nama_jenis' => 'Pembersih'],
        ]);
    }
}

