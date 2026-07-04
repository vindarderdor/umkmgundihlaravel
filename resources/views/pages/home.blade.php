@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="bg-green-600 text-white pb-24 pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-6">
            Selamat Datang di Portal UMKM <br>
            <span class="text-green-200">Desa BBK 8 UNAIR GUNDIH 1</span>
        </h1>
        <p class="mt-4 max-w-2xl text-xl mx-auto text-green-100">
            Temukan berbagai produk lokal unggulan dari UMKM kami. Bersama kita majukan perekonomian desa!
        </p>
        <div class="mt-10 flex justify-center gap-4">
            <a href="{{ route('product.index') }}" class="bg-white text-green-700 hover:bg-green-50 px-8 py-3 border border-transparent text-base font-medium rounded-md shadow-sm transition">
                Jelajahi Produk
            </a>
            <a href="{{ route('umkm.index') }}" class="bg-green-800 text-white hover:bg-green-900 px-8 py-3 border border-transparent text-base font-medium rounded-md shadow-sm transition">
                Lihat Daftar UMKM
            </a>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12">
    <div class="bg-white rounded-lg shadow-xl p-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
            <div class="p-4 rounded-lg bg-green-50 border border-green-100">
                <div class="text-3xl font-bold text-green-600">{{ $umkmCount ?? 0 }}</div>
                <div class="text-green-800 mt-2 font-medium">Total UMKM</div>
            </div>
            <div class="p-4 rounded-lg bg-green-50 border border-green-100">
                <div class="text-3xl font-bold text-green-600">{{ $productCount ?? 0 }}</div>
                <div class="text-green-800 mt-2 font-medium">Total Produk</div>
            </div>
            <div class="p-4 rounded-lg bg-green-50 border border-green-100">
                <div class="text-3xl font-bold text-green-600">{{ $categoryCount ?? 0 }}</div>
                <div class="text-green-800 mt-2 font-medium">Kategori</div>
            </div>
            <div class="p-4 rounded-lg bg-green-50 border border-green-100">
                <div class="text-3xl font-bold text-green-600">{{ $newsCount ?? 0 }}</div>
                <div class="text-green-800 mt-2 font-medium">Berita & Info</div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16 mb-16">
    <div class="flex justify-between items-end mb-8">
        <div>
            <h2 class="text-3xl font-bold text-gray-900">UMKM Terbaru</h2>
            <p class="text-gray-500 mt-2">Dukung usaha lokal dengan mengenal UMKM terbaru kami.</p>
        </div>
        <a href="{{ route('umkm.index') }}" class="text-green-600 hover:text-green-800 font-medium">Lihat Semua &rarr;</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($latestUmkms ?? [] as $umkm)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
            <div class="h-48 bg-gray-200 w-full object-cover">
                @if($umkm->logo_path)
                    <img src="{{ Storage::url($umkm->logo_path) }}" alt="{{ $umkm->name }}" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                @endif
            </div>
            <div class="p-6">
                <div class="text-xs font-semibold text-green-600 uppercase tracking-wider mb-2">{{ $umkm->category?->name ?? 'Uncategorized' }}</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $umkm->name }}</h3>
                <p class="text-gray-600 mb-4 line-clamp-2">{{ $umkm->description }}</p>
                <a href="{{ route('umkm.show', $umkm->slug) }}" class="text-green-600 hover:text-green-800 font-medium text-sm">Lihat Detail</a>
            </div>
        </div>
        @empty
        <div class="col-span-3 text-center py-12 text-gray-500 bg-gray-50 rounded-xl">
            Belum ada data UMKM.
        </div>
        @endforelse
    </div>
</div>
@endsection
