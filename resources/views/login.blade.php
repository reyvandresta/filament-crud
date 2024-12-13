<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-600 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Selamat Datang</h2>
        <p class="text-center text-gray-600 mb-4">Silakan masuk untuk melanjutkan</p>
        
        <form id="loginform" method='post'>
            <!-- Username Field -->
            <div class="mb-6">
                <label for="username" class="block text-left mb-2 text-lg font-semibold text-gray-700">Username:</label>
                <input type="text" name="username" id="username" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan username Anda" required>
            </div>

            <!-- Password Field -->
            <div class="mb-6">
                <label for="password" class="block text-left mb-2 text-lg font-semibold text-gray-700">Password:</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan password Anda" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-700 transition duration-300">LOGIN</button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-gray-600">Belum punya akun? <a href="/register" class="text-blue-500 hover:underline">Daftar di sini</a></p>
            <p class="text-gray-600">Atau kembali ke <a href="{{ route('index') }}" class="text-blue-500 hover:underline">Beranda</a></p>
        </div>
    </div>

    <script>
        document.getElementById('loginform').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const correctUsername = 'admin';
            const correctPassword = '123456';
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            if (username === correctUsername && password === correctPassword) {
                alert('Login berhasil');
                console.log('Berhasil');
                window.location.href = 'index';
            } else {
                alert('Login Gagal');
                console.log('Gagal');
            }
        });
    </script>

</body>
</html>