@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
<div class="bg-green-700 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl font-extrabold text-white sm:text-4xl">
            Katalog Produk
        </h1>
        <p class="mt-4 text-xl text-green-100">
            Temukan barang berkualitas dari UMKM Desa GUNDIH 1.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-8 bg-white p-4 rounded-lg shadow flex flex-col md:flex-row justify-between items-center gap-4">
        <form action="{{ route('product.index') }}" method="GET" class="w-full flex gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama produk..." class="w-full md:w-2/3 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 px-4 py-2 border">
            <select name="category" class="w-full md:w-1/3 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 px-4 py-2 border bg-white">
                <option value="">Semua Kategori</option>
                @foreach(\App\Models\Category::all() as $cat)
                    <option value="{{ $cat->slug }}" {{ request('category') == $cat->slug ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md transition">Filter</button>
        </form>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @forelse($products as $product)
        <div class="bg-white rounded-xl shadow border border-gray-100 overflow-hidden hover:shadow-lg transition flex flex-col">
            <div class="h-48 bg-gray-100 relative">
                @if($product->image_path)
                    <img src="{{ Storage::url($product->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                        <span>No Image</span>
                    </div>
                @endif
                <div class="absolute bottom-0 left-0 bg-green-700 text-white font-bold px-4 py-2 rounded-tr-lg">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </div>
                <div class="absolute top-2 right-2 bg-white/90 px-2 py-1 rounded text-xs font-bold text-gray-700 shadow">
                    {{ $product->category?->name }}
                </div>
            </div>
            <div class="p-4 flex flex-col flex-1">
                <h4 class="font-bold text-lg text-gray-900 mb-1">{{ $product->name }}</h4>
                <a href="{{ route('umkm.show', $product->umkm->slug ?? '') }}" class="text-xs font-medium text-green-600 hover:underline mb-2 flex items-center">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    {{ $product->umkm?->name }}
                </a>
                <p class="text-sm text-gray-600 line-clamp-2 flex-1">{{ $product->description }}</p>
                @if($product->umkm?->whatsapp_number)
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $product->umkm->whatsapp_number) }}?text=Halo,%20saya%20tertarik%20dengan%20produk%20{{ $product->name }}" target="_blank" class="mt-4 block text-center w-full bg-green-600 text-white hover:bg-green-700 font-semibold py-2 px-4 rounded-lg transition text-sm">
                    Beli via WhatsApp
                </a>
                @endif
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12 bg-white rounded-lg shadow text-gray-500">
            Tidak ada produk yang ditemukan.
        </div>
        @endforelse
    </div>

    <div class="mt-12">
        {{ $products->links() }}
    </div>
</div>
@endsection
