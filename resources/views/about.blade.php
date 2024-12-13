<!doctype html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  @vite('resources/css/app.css') 
  <title>About Me</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head> 
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
    <header class="mb-6">
      <h1 class="text-3xl font-bold underline text-center" style="background-color: rgb(153, 27, 27); color: white;"> 
        ABOUT ME 
      </h1> 
    </header> 

    <div class="mb-4">
      <p class="text-lg text-gray-700">
        Selamat datang di halaman About Me! Nama saya [Nama Anda], dan saya adalah seorang [profesi atau hobi]. 
        Saya memiliki minat yang besar dalam [sebutkan minat atau bidang yang Anda sukai], dan saya senang berbagi pengetahuan serta pengalaman saya dengan orang lain.
      </p>
    </div>

    <div class="mb-4">
      <h2 class="text-2xl font-semibold text-gray-800">Tentang Saya</h2>
      <p class="text-gray-600">
        Saya lahir dan dibesarkan di [kota atau tempat asal]. Sejak kecil, saya selalu tertarik dengan [sebutkan minat atau hobi]. 
        Saya telah menghabiskan waktu bertahun-tahun untuk mengembangkan keterampilan saya di bidang ini dan terus belajar setiap hari.
      </p>
    </div>

    <div class="mb-4">
      <h2 class="text-2xl font-semibold text-gray-800">Visi dan Misi</h2>
      <p class="text-gray-600">
        Visi saya adalah [sebutkan visi Anda], dan misi saya adalah [sebutkan misi Anda]. 
        Saya percaya bahwa [sebutkan keyakinan atau nilai-nilai yang Anda pegang].
      </p>
    </div>

    <div class="text-center">
      <a href="{{ route('index') }}" class="w-full py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Kembali ke Index</a>
    </div>
  </div>

</body> 
</html>