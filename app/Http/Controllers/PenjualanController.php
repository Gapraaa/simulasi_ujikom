<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Barang;
use Illuminate\Http\Request;

class PenjualanController extends Controller {
    public function index() {
        $penjualan = Penjualan::with('barang')->get();
        return view('user.penjualan.index', compact('penjualan'));
    }

    public function create() {
        $barang = Barang::where('stok', '>', 0)->get(); // Hanya barang dengan stok tersedia
        return view('user.penjualan.create', compact('barang'));
    }

    public function store(Request $request) {
        $request->validate([
            'tgl_faktur' => 'required|date',
            'no_faktur' => 'required|unique:penjualan',
            'nama_konsumen' => 'required',
            'kode_barang' => 'required',
            'jumlah' => 'required|integer|min:1',
        ]);

        $barang = Barang::where('kode_barang', $request->kode_barang)->first();

        if (!$barang || $barang->stok < $request->jumlah) {
            return redirect()->back()->with('error', 'Stok barang tidak mencukupi.');
        }

        $total_harga = $barang->harga_jual * $request->jumlah;

        // Kurangi stok barang
        $barang->stok -= $request->jumlah;
        $barang->save();

        // Simpan data penjualan
        Penjualan::create([
            'tgl_faktur' => $request->tgl_faktur,
            'no_faktur' => $request->no_faktur,
            'nama_konsumen' => $request->nama_konsumen,
            'kode_barang' => $request->kode_barang,
            'jumlah' => $request->jumlah,
            'harga_satuan' => $barang->harga_jual,
            'harga_total' => $total_harga,
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil, stok barang telah dikurangi.');
    }
}
