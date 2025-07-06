@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Daftar Penjualan</h2>
    <a href="{{ route('penjualan.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Penjualan</a>

    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border">Tanggal</th>
                <th class="p-2 border">No Faktur</th>
                <th class="p-2 border">Nama Konsumen</th>
                <th class="p-2 border">Barang</th>
                <th class="p-2 border">Jumlah</th>
                <th class="p-2 border">Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $item)
            <tr class="border">
                <td class="p-2 border">{{ $item->tgl_faktur }}</td>
                <td class="p-2 border">{{ $item->no_faktur }}</td>
                <td class="p-2 border">{{ $item->nama_konsumen }}</td>
                <td class="p-2 border">{{ $item->barang->nama_barang }}</td>
                <td class="p-2 border">{{ $item->jumlah }}</td>
                <td class="p-2 border">Rp {{ number_format($item->harga_total, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
