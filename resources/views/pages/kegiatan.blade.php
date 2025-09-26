@extends('layouts.app')

@section('title', 'Kegiatan Sanggar Tari Mahera')

@section('content')
<div class="container mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-center">Kegiatan Latihan & Pertunjukan</h1>

    <!-- GRID 3 KOTAK PER BARIS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- CARD 1 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 p-5 text-center">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Latihan Rutin Mingguan</h2>
            <img src="{{ asset('images/kegiatan/latihan1.jpg') }}"
                 alt="Latihan Mingguan"
                 class="w-full h-40 object-cover rounded-lg mb-4">
            <p class="text-gray-600 text-sm">
                Latihan rutin setiap Sabtu sore untuk mempersiapkan pertunjukan dan meningkatkan teknik tari anggota.
            </p>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 p-5 text-center">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Persiapan Festival Tari</h2>
            <img src="{{ asset('images/kegiatan/latihan2.jpg') }}"
                 alt="Persiapan Festival"
                 class="w-full h-40 object-cover rounded-lg mb-4">
            <p class="text-gray-600 text-sm">
                Sesi latihan khusus menjelang lomba Festival Tari Nusantara, fokus pada kostum dan koreografi.
            </p>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 p-5 text-center">
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Pertunjukan di Acara Daerah</h2>
            <img src="{{ asset('images/kegiatan/pertunjukan1.jpg') }}"
                 alt="Pertunjukan Daerah"
                 class="w-full h-40 object-cover rounded-lg mb-4">
            <p class="text-gray-600 text-sm">
                Penampilan spesial dalam acara Hari Jadi Kabupaten, menampilkan tarian khas Banjarnegara.
            </p>
        </div>

    </div>
</div>
@endsection
