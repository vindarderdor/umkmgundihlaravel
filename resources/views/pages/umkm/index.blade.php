@extends('layouts.app')

@section('title', 'Daftar UMKM')

@section('content')
<div class="bg-green-700 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl font-extrabold text-white sm:text-4xl">
            Daftar UMKM
        </h1>
        <p class="mt-4 text-xl text-green-100">
            Kenali lebih dekat potensi lokal dari Desa BBK 8 UNAIR GUNDIH 1.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-8 bg-white p-4 rounded-lg shadow flex flex-col md:flex-row justify-between items-center gap-4">
        <form action="{{ route('umkm.index') }}" method="GET" class="w-full md:w-1/2 flex gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama UMKM..." class="w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 px-4 py-2 border">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition">Cari</button>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
        @forelse($umkms as $umkm)
        <div class="bg-white rounded-xl shadow border border-gray-100 overflow-hidden hover:shadow-lg transition flex flex-col">
            <div class="h-48 bg-gray-100 flex-shrink-0 relative">
                @if($umkm->logo_path)
                    <img src="{{ Storage::url($umkm->logo_path) }}" alt="{{ $umkm->name }}" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                        <span>No Image</span>
                    </div>
                @endif
                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-green-700">
                    {{ $umkm->category?->name ?? 'Uncategorized' }}
                </div>
            </div>
            <div class="p-6 flex-1 flex flex-col">
                <h3 class="text-2xl font-bold text-gray-900 mb-1">{{ $umkm->name }}</h3>
                <p class="text-sm text-gray-500 mb-4 flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    {{ $umkm->owner_name }}
                </p>
                <p class="text-gray-600 mb-6 flex-1 line-clamp-3">
                    {{ $umkm->description }}
                </p>
                <a href="{{ route('umkm.show', $umkm->slug) }}" class="block text-center w-full bg-green-50 text-green-700 hover:bg-green-100 font-semibold py-2 px-4 rounded-lg transition">
                    Lihat Selengkapnya
                </a>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12 bg-white rounded-lg shadow text-gray-500">
            Tidak ada UMKM yang ditemukan.
        </div>
        @endforelse
    </div>

    <div class="mt-12">
        {{ $umkms->links() }}
    </div>
</div>
@endsection
