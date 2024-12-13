<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Rasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Bagian Header -->
    <header class="bg-gray-300 py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="/assets/logo.png" class="w-16" alt="Logo Rumah Rasa">
                <h1 class="text-4xl font-bold text-black">RUMAH RASA</h1>
            </div>
            <ul class="flex space-x-6 text-xl font-semibold">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/about" class="hover:underline">About</a></li>
                <li><a href="#" class="hover:underline">Resep Rasa</a></li>
                <li><a href="#" class="hover:underline">Belanja Yuk</a></li>
                <li><a href="#" class="hover:underline">Instagram</a></li>
                <li><a href="/login" class="hover:underline">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Bagian Hero -->
    <section class="relative">
        <img src="/assets/atas.jpg" alt="Gambar Hero" class="w-full h-96 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold mb-4">Selamat Datang di Rumah Rasa</h2>
                <a href="/about" class="underline text-lg">Kunjungi</a>
            </div>
        </div>
    </section>

    <!-- Bagian Konten -->
    <section class="bg-gray-50 min-h-screen py-12" id="Resep">
        <div class="container mx-auto">
            <div class="mb-12 text-center">
                <h2 class="text-4xl font-semibold">Resep</h2>
                <p class="text-lg mt-2">Terbanyak diminati</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($makanans as $makanan)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset($makanan->picture) }}" alt="{{ $makanan->title }}" class="w-full h-64 object-cover" />
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold">{{ $makanan->title }}</h3>
                        <p class="text-sm text-gray-500 mt-2">{{ $makanan->content }}</p>
                        <a href="/resep/{{ $makanan->id }}" class="mt-4 bg-black text-white text-sm py-1 px-4 rounded hover:bg-gray-800 inline-block text-center">
                            Lihat Resep
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Bagian Footer -->
    <footer class="bg-gray-800 py-8 text-white text-center">
        <div class="container mx-auto">
            <img src="/assets/bawah.png" class="mx-auto w-24" alt="Logo Rumah Rasa">
            <h1 class="text-3xl font-bold mt-6">Website Rumah Rasa</h1>
            <p class="mt-4 text-lg">Rumah Rasa adalah situs web yang menawarkan berbagai resep masakan dari beragam budaya.</p>
        </div>
    </footer>

</body>
</html>