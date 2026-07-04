@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="bg-green-700 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl font-extrabold text-white sm:text-4xl">
            Hubungi Kami
        </h1>
        <p class="mt-4 text-xl text-green-100 max-w-3xl mx-auto">
            Punya pertanyaan atau ingin bekerja sama? Jangan ragu untuk menghubungi kami.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h2>
            
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-green-100 p-3 rounded-full text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900">Alamat</h4>
                        <p class="mt-1 text-gray-600">Balai Desa GUNDIH 1<br>Surabaya, Jawa Timur, Indonesia</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-green-100 p-3 rounded-full text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900">Email</h4>
                        <p class="mt-1 text-gray-600">info@umkmgundih.id</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-green-100 p-3 rounded-full text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900">Telepon / WhatsApp</h4>
                        <p class="mt-1 text-gray-600">+62 812-3456-7890</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>
            <form action="#" method="POST">
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 py-2 px-3 border" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 py-2 px-3 border" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                        <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 focus:ring-opacity-50 py-2 px-3 border" required></textarea>
                    </div>
                    <div>
                        <button type="button" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-bold text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition">
                            Kirim Pesan (Demo)
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
