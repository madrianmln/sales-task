<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        'produks/*', // Izinkan endpoint tanpa CSRF (hanya untuk sementara debugging)
    ];
}
