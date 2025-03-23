<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Aktifkan CORS untuk semua response
        Response::macro('cors', function ($content = '', $status = 200, array $headers = []) {
            $defaultHeaders = [
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
                'Access-Control-Allow-Headers' => 'Content-Type, Authorization',
            ];

            return response($content, $status, array_merge($defaultHeaders, $headers));
        });

        // Jika menggunakan API route, tambahkan middleware di sini
        Route::middleware(['api'])->group(function () {
            // Pastikan route API sudah dibuat di api.php
        });
    }
}
