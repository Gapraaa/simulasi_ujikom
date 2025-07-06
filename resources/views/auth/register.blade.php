<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
    <form method="POST" action="{{ route('register') }}" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf
        <h2 class="text-2xl font-bold mb-4">Register</h2>
        
        <input type="text" name="name" placeholder="Name" class="w-full p-2 mb-2 border rounded">
        <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-2 border rounded">
        <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-2 border rounded">
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full p-2 mb-2 border rounded">

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Register</button>
        <p class="mt-2 text-sm">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Login</a></p>
    </form>
</body>
</html>
