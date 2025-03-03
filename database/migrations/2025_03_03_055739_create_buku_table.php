<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {

            $table->text('judul');
            $table->text('pengarang');
            $table->date('tgl_pembelian');
            $table->integer('jumlah_ex');
            $table->enum('status', ['tersedia', 'tidak tersedia']);
          
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
