<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('jenis_produks', function (Blueprint $table) {
            $table->id(); // Auto unsignedBigInteger
            $table->string('nama_jenis')->unique();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('jenis_produks');
    }
};
