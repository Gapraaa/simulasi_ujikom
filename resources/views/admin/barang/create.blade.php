@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Tambah Barang</h2>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-medium">Kode Barang</label>
            <input type="text" name="kode_barang" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Nama Barang</label>
            <input type="text" name="nama_barang" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Harga Jual</label>
            <input type="number" name="harga_jual" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Harga Beli</label>
            <input type="number" name="harga_beli" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Stok</label>
            <input type="number" name="stok" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Satuan</label>
            <input type="text" name="satuan" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Kategori</label>
            <input type="text" name="kategori" class="border rounded w-full p-2">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
