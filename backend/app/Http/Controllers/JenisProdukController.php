<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;

class JenisProdukController extends Controller
{
    public function index()
    {
        $jenisProduk = JenisProduk::all();
        return response()->json($jenisProduk);
    }
}
