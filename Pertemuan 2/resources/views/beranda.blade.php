{{-- 
  Menggunakan @extends untuk memberitahu Blade bahwa file ini
  akan menggunakan layout dari 'layouts.master'.
  Laravel secara otomatis akan mencari file di /resources/views/layouts/master.blade.php
--}}
@extends('layouts.master')

{{-- 
  Mengisi section 'title' yang sudah didefinisikan dengan @yield('title') 
  di file master. Ini adalah cara singkat untuk section berisi teks sederhana.
--}}
@section('title', 'Halaman Beranda')

{{-- 
  Mengisi section 'content'. Semua yang ada di dalam blok @section dan @endsection
  ini akan dimasukkan ke dalam area @yield('content') di file master.
--}}
@section('content')
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-3xl font-bold mb-4 text-gray-800">Selamat Datang di Halaman Beranda!</h2>
        <p class="text-gray-600">
            Ini adalah konten spesifik untuk halaman beranda. Layout utama seperti header
            dan footer diambil dari file <code class="bg-gray-200 p-1 rounded">master.blade.php</code>,
            sedangkan konten ini berasal dari <code class="bg-gray-200 p-1 rounded">beranda.blade.php</code>.
        </p>
        <button class="mt-6 bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition duration-300">
            Pelajari Lebih Lanjut
        </button>
    </div>
@endsection
