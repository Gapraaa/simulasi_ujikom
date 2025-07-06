<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel - Penjualan Sparepart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-900 text-white p-4 flex justify-between">
        <h2 class="text-lg font-bold">Penjualan Sparepart</h2>
        <a href="{{ route('logout') }}" class="px-4 py-2 bg-red-600 rounded">Logout</a>
    </nav>

    <div class="container mx-auto p-6">
        @yield('content')
    </div>
</body>
</html>
