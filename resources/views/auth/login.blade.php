<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
    <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf
        <h2 class="text-2xl font-bold mb-4">Login</h2>

        <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-2 border rounded">
        <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-2 border rounded">
        
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
        <p class="mt-2 text-sm">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500">Register</a></p>
    </form>
</body>
</html>
