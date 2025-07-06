<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_faktur');
            $table->string('no_faktur')->unique();
            $table->string('nama_konsumen');
            $table->string('kode_barang'); // Pastikan tipe datanya sama (string)
            $table->integer('jumlah');
            $table->decimal('harga_satuan', 10, 2);
            $table->decimal('harga_total', 10, 2);
            $table->timestamps();
    
            // Foreign key harus sesuai dengan tipe data
            $table->foreign('kode_barang')->references('kode_barang')->on('barang')->onDelete('cascade');
        });
    }
    

    public function down(): void {
        Schema::dropIfExists('penjualan');
    }
};
