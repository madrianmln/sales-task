<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->unsignedBigInteger('jenis_produk_id'); // Harus unsignedBigInteger
            $table->integer('stok');
            $table->timestamps();

            $table->foreign('jenis_produk_id')->references('id')->on('jenis_produks')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('produks');
    }
};
