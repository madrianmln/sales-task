<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::with('produk.jenisProduk')->get();
        return response()->json($transaksis);
    }

    public function store(Request $request)
    {
        $transaksi = Transaksi::create($request->all());
        return response()->json($transaksi, 201);
    }

    public function show(Transaksi $transaksi)
    {
        return response()->json($transaksi);
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $transaksi->update($request->all());
        return response()->json($transaksi);
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return response()->json(null, 204);
    }
}
