@extends('layouts.user')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Tambah Penjualan</h2>

    @if (session('error'))
        <div class="bg-red-500 text-white p-2 mb-4 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-medium">Tanggal Faktur</label>
            <input type="date" name="tgl_faktur" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">No Faktur</label>
            <input type="text" name="no_faktur" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Nama Konsumen</label>
            <input type="text" name="nama_konsumen" class="border rounded w-full p-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Pilih Barang</label>
            <select name="kode_barang" class="border rounded w-full p-2">
                @foreach ($barang as $item)
                <option value="{{ $item->kode_barang }}">
                    {{ $item->nama_barang }} - Rp {{ number_format($item->harga_jual, 0, ',', '.') }} (Stok: {{ $item->stok }})
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Jumlah</label>
            <input type="number" name="jumlah" min="1" class="border rounded w-full p-2">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
