<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Judul halaman akan diambil dari section 'title' di halaman anak --}}
    <title>Aplikasi Saya - @yield('title')</title>
    {{-- Menggunakan CDN TailwindCSS untuk styling sederhana --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    {{-- 
      Menggunakan @include untuk menyertakan file partial.
      Ini bagus untuk komponen yang berulang seperti header, footer, atau sidebar.
    --}}
    @include('partials.header')

    <main class="container mx-auto p-6">
        {{-- 
          Menggunakan @yield untuk menandai area di mana konten utama
          dari halaman anak akan ditampilkan. 'content' adalah nama areanya.
        --}}
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        <p>&copy; 2024 Aplikasi Keren Saya. Semua Hak Cipta Dilindungi.</p>
    </footer>

</body>
</html>
