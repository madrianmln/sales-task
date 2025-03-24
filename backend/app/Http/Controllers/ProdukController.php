<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return response()->json(Produk::with('jenisProduk')->get());

        foreach ($produks as $produk) {
            $totalTerjual = Transaksi::where('produk_id', $produk->id)->sum('jumlah_terjual');
            $produk->stok = $produk->stok - $totalTerjual; // Hitung stok setelah penjualan
        }
    
        return response()->json($produks);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'stok' => 'required|integer',
            'jenis_produk_id' => 'required|exists:jenis_produks,id',
        ]);

        $produk = Produk::create($validated);

        return response()->json($produk, 201);
    }

    public function show(Produk $produk)
    {
        return response()->json($produk);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'jenis_produk_id' => 'required|integer|exists:jenis_produks,id',
            'stok' => 'required|integer|min:0',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return response()->json(['message' => 'Produk berhasil diperbarui'], 200);
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return response()->json(null, 204);
    }
}
