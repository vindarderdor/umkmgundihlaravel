@extends('layouts.app')

@section('title', $umkm->name)

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('umkm.index') }}" class="inline-flex items-center text-sm font-medium text-green-600 hover:text-green-800 mb-6">
            <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Daftar UMKM
        </a>

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
            <div class="md:w-1/3 bg-green-50 p-8 flex flex-col items-center justify-center border-r border-green-100">
                <div class="w-48 h-48 rounded-full bg-white shadow-inner overflow-hidden mb-6 border-4 border-white flex items-center justify-center text-gray-400">
                    @if($umkm->logo_path)
                        <img src="{{ Storage::url($umkm->logo_path) }}" alt="{{ $umkm->name }}" class="w-full h-full object-cover">
                    @else
                        <span>No Image</span>
                    @endif
                </div>
                <h1 class="text-3xl font-extrabold text-gray-900 text-center mb-2">{{ $umkm->name }}</h1>
                <span class="bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full font-semibold">{{ $umkm->category?->name ?? 'Uncategorized' }}</span>
            </div>
            
            <div class="md:w-2/3 p-8 flex flex-col justify-center">
                <h3 class="text-xl font-bold text-gray-900 mb-4 border-b pb-2">Informasi UMKM</h3>
                
                <div class="space-y-4">
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Nama Pemilik</p>
                        <p class="text-lg text-gray-900">{{ $umkm->owner_name }}</p>
                    </div>
                    
                    @if($umkm->whatsapp_number)
                    <div>
                        <p class="text-sm text-gray-500 font-medium">WhatsApp</p>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $umkm->whatsapp_number) }}" target="_blank" class="inline-flex items-center mt-1 text-green-600 hover:text-green-800 font-medium">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 3.825.001 6.938 3.113 6.939 6.938-.001 3.825-3.114 6.938-6.939 6.942z"/></svg>
                            Hubungi via WhatsApp
                        </a>
                    </div>
                    @endif
                    
                    @if($umkm->address)
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Alamat</p>
                        <p class="text-lg text-gray-900">{{ $umkm->address }}</p>
                    </div>
                    @endif
                    
                    @if($umkm->description)
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Deskripsi Singkat</p>
                        <p class="text-gray-700 leading-relaxed">{{ $umkm->description }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-3xl font-bold text-gray-900 mb-8 border-l-4 border-green-600 pl-4">Katalog Produk</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @forelse($umkm->products as $product)
        <div class="bg-white rounded-xl shadow border border-gray-100 overflow-hidden hover:shadow-lg transition">
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
            </div>
            <div class="p-4">
                <h4 class="font-bold text-lg text-gray-900 mb-1">{{ $product->name }}</h4>
                <p class="text-xs font-semibold text-green-600 mb-2">{{ $product->category?->name }}</p>
                <p class="text-sm text-gray-600 line-clamp-2">{{ $product->description }}</p>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-12 bg-white rounded-lg shadow border border-gray-100 text-gray-500">
            UMKM ini belum memiliki produk.
        </div>
        @endforelse
    </div>
</div>
@endsection
