@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Daftar Barang</h2>
    <a href="{{ route('barang.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Barang</a>

    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border">Kode</th>
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">Harga Jual</th>
                <th class="p-2 border">Stok</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
            <tr class="border">
                <td class="p-2 border">{{ $item->kode_barang }}</td>
                <td class="p-2 border">{{ $item->nama_barang }}</td>
                <td class="p-2 border">Rp {{ number_format($item->harga_jual, 0, ',', '.') }}</td>
                <td class="p-2 border">{{ $item->stok }}</td>
                <td class="p-2 border">
                    <a href="{{ route('barang.edit', $item->kode_barang) }}" class="text-yellow-500">Edit</a>
                    <form action="{{ route('barang.destroy', $item->kode_barang) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-500 ml-2">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
