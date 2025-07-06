<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model {
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    public $incrementing = false;
    protected $fillable = ['kode_barang', 'nama_barang', 'harga_jual', 'harga_beli', 'satuan', 'kategori', 'stok'];

    public function penjualan() {
        return $this->hasMany(Penjualan::class, 'kode_barang');
    }
}

