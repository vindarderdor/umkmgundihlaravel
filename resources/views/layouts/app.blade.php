<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi UMKM - @yield('title', 'Beranda')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @endif
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <nav class="bg-green-700 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center font-bold text-xl gap-2">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        UMKM GUNDIH 1
                    </a>
                </div>
                <div class="hidden sm:flex sm:items-center sm:space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-colors">Beranda</a>
                    <a href="{{ route('about') }}" class="hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-colors">Tentang Desa</a>
                    <a href="{{ route('umkm.index') }}" class="hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-colors">Daftar UMKM</a>
                    <a href="{{ route('product.index') }}" class="hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-colors">Katalog Produk</a>
                    <a href="{{ route('contact') }}" class="hover:text-green-200 px-3 py-2 rounded-md text-sm font-medium transition-colors">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-green-900 text-white py-12 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">UMKM GUNDIH 1</h3>
                <p class="text-green-100">Mendukung dan mempromosikan produk lokal Desa BBK 8 UNAIR GUNDIH 1 untuk perekonomian yang lebih baik.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-green-200 hover:text-white transition">Beranda</a></li>
                    <li><a href="{{ route('umkm.index') }}" class="text-green-200 hover:text-white transition">Daftar UMKM</a></li>
                    <li><a href="{{ route('product.index') }}" class="text-green-200 hover:text-white transition">Katalog Produk</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Kontak</h3>
                <ul class="space-y-2 text-green-100">
                    <li>Desa BBK 8 UNAIR GUNDIH 1</li>
                    <li>Surabaya, Indonesia</li>
                    <li>Email: info@umkmgundih.id</li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 pt-8 border-t border-green-700 text-center text-green-200">
            <p>&copy; {{ date('Y') }} Sistem Informasi UMKM Desa GUNDIH 1. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
