<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Http\Request;

Route::apiResource('produks', ProdukController::class);
Route::put('/produks/{id}', [ProdukController::class, 'update']);
Route::apiResource('transaksis', TransaksiController::class);
Route::get('/barangs', [BarangController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
