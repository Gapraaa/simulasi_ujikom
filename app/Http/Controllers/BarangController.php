<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller {
    public function index() {
        $barang = Barang::all();
        return view('admin.barang.index', compact('barang'));
    }

    public function create() {
        return view('admin.barang.create');
    }

    public function store(Request $request) {
        $request->validate([
            'kode_barang' => 'required|unique:barang',
            'nama_barang' => 'required',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'stok' => 'required|numeric',
            'satuan' => 'required',
            'kategori' => 'required',
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit($id) {
        $barang = Barang::findOrFail($id);
        return view('admin.barang.edit', compact('barang'));
    }

    public function update(Request $request, $id) {
        $barang = Barang::findOrFail($id);
        $barang->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy($id) {
        Barang::destroy($id);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }
}
