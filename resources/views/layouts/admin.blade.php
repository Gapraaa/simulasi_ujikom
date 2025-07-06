<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Penjualan Sparepart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-blue-900 text-white p-5">
            <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
            <nav>
                <ul>
                    <li class="mb-3"><a href="{{ route('barang.index') }}" class="block py-2 px-4 hover:bg-blue-700 rounded">Barang</a></li>
                    <li class="mb-3"><a href="{{ route('penjualan.index') }}" class="block py-2 px-4 hover:bg-blue-700 rounded">Penjualan</a></li>
                    <li class="mb-3"><a href="{{ route('logout') }}" class="block py-2 px-4 hover:bg-blue-700 rounded">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
