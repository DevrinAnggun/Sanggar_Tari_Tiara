@extends('layouts.app')

@section('title', 'Prestasi Sanggar Tari Mahera')

@section('content')
<div class="container mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-8 text-center">Prestasi Sanggar Tari Mahera</h1>

    <!-- GRID 3 KOTAK SEBARIS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- CARD 1 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 p-5 text-center">
            <h2 class="text-lg font-semibold text-gray-800">Juara 1 Tari Tradisional</h2>
            <p class="text-gray-500 mb-4">Tahun: 2024</p>
            <img src="{{ asset('images/prestasi/juara1-2024.jpg') }}"
                 alt="Juara 1 2024"
                 class="w-full h-40 object-contain rounded-lg">
        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 p-5 text-center">
            <h2 class="text-lg font-semibold text-gray-800">Festival Budaya Nasional</h2>
            <p class="text-gray-500 mb-4">Tahun: 2023</p>
            <img src="{{ asset('images/prestasi/festival-2023.jpg') }}"
                 alt="Festival 2023"
                 class="w-full h-40 object-contain rounded-lg">
        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 p-5 text-center">
            <h2 class="text-lg font-semibold text-gray-800">Juara Harapan 1</h2>
            <p class="text-gray-500 mb-4">Tahun: 2022</p>
            <img src="{{ asset('images/prestasi/festival-2022.jpg') }}"
                 alt="Festival 2022"
                 class="w-full h-40 object-contain rounded-lg">
        </div>

    </div>
</div>
@endsection
