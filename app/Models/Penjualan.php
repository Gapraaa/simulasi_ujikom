<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model {
    use HasFactory;

    protected $table = 'penjualan';
    protected $fillable = ['tgl_faktur', 'no_faktur', 'nama_konsumen', 'kode_barang', 'jumlah', 'harga_satuan', 'harga_total'];

    public function barang() {
        return $this->belongsTo(Barang::class, 'kode_barang');
    }
}
