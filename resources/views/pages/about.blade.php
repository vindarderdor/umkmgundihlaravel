@extends('layouts.app')

@section('title', 'Tentang Desa')

@section('content')
<div class="bg-green-700 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl font-extrabold text-white sm:text-4xl">
            Tentang Desa GUNDIH 1
        </h1>
        <p class="mt-4 text-xl text-green-100 max-w-3xl mx-auto">
            Mengenal lebih dekat profil Desa BBK 8 UNAIR GUNDIH 1 dan potensinya.
        </p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col lg:flex-row">
        <div class="lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 border-l-4 border-green-600 pl-4">Profil Desa</h2>
            <div class="prose prose-green lg:prose-lg text-gray-700">
                <p>
                    Desa GUNDIH 1 merupakan desa yang memiliki potensi besar dalam bidang Usaha Mikro, Kecil, dan Menengah (UMKM). 
                    Masyarakat desa ini memiliki semangat wirausaha yang tinggi dengan memproduksi berbagai macam produk mulai dari kuliner, kerajinan, hingga jasa.
                </p>
                <p>
                    Program kerja KKN BBK 8 Universitas Airlangga bertujuan untuk mendigitalisasi UMKM di Desa GUNDIH 1 agar dapat memperluas jangkauan pasar dan meningkatkan perekonomian warga. 
                    Melalui website ini, kami berharap produk-produk unggulan desa dapat lebih dikenal oleh masyarakat luas.
                </p>
                <h3>Visi & Misi</h3>
                <ul>
                    <li>Membangun ekosistem ekonomi kreatif yang mandiri dan berdaya saing.</li>
                    <li>Memberikan pendampingan teknologi bagi para pelaku UMKM lokal.</li>
                    <li>Mempromosikan potensi daerah ke tingkat nasional melalui digitalisasi.</li>
                </ul>
            </div>
        </div>
        <div class="lg:w-1/2 bg-green-50 p-8 flex items-center justify-center">
            <!-- Placeholder for village image or map -->
            <div class="w-full h-full min-h-[300px] bg-green-200 rounded-xl flex items-center justify-center text-green-800 font-bold text-xl shadow-inner relative overflow-hidden">
                <svg class="w-32 h-32 opacity-20 absolute" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                <span>Foto Profil Desa (Opsional)</span>
            </div>
        </div>
    </div>
</div>
@endsection
