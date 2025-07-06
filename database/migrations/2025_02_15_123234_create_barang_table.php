<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('barang', function (Blueprint $table) {
            $table->string('kode_barang')->primary();
            $table->string('nama_barang');
            $table->decimal('harga_jual', 10, 2);
            $table->decimal('harga_beli', 10, 2);
            $table->string('satuan');
            $table->string('kategori');
            $table->integer('stok')->default(0); // Tambahkan kolom stok
            $table->timestamps();
        });
    }
    

    public function down(): void {
        Schema::dropIfExists('barang');
    }
};