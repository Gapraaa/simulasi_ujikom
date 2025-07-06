<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body class="flex flex-col items-center justify-center h-screen bg-gray-100">
    <h1 class="text-3xl font-bold">Selamat Datang, {{ auth()->user()->name }}!</h1>
    <form method="POST" action="{{ route('logout') }}" class="mt-4">
        @csrf
        <button type="submit" class="bg-red-500 text-white p-2 rounded">Logout</button>
    </form>
</body>
</html>
