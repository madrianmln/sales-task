<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\JenisProdukController;

Route::get('/jenis-produks', [JenisProdukController::class, 'index']);
Route::apiResource('produks', ProdukController::class);
Route::post('/produks', [ProdukController::class, 'store']);
Route::put('/produks/{id}', [ProdukController::class, 'update']);
Route::apiResource('transaksis', TransaksiController::class);
