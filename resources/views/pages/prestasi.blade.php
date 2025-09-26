@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" style="background-color:#fff0f5;"> 
    <div class="container">
        <h1 class="fw-bold text-center mb-4">Prestasi Sanggar Tari Mahera</h1>

        <p class="text-center mb-5">
            Sanggar Tari Mahera telah meraih berbagai penghargaan dan prestasi di tingkat lokal, provinsi, dan nasional. 
            Berikut adalah beberapa pencapaian yang membanggakan.
        </p>

        <!-- Daftar Prestasi -->
        <div class="list-group shadow mb-4">
            <div class="list-group-item">
                <strong>Juara 1</strong> – Lomba Tari Tradisional Tingkat Kabupaten (2023)
            </div>
            <div class="list-group-item">
                <strong>Juara Harapan 1</strong> – Festival Tari Provinsi Jawa Tengah (2022)
            </div>
            <div class="list-group-item">
                <strong>Partisipasi</strong> – Parade Seni Budaya Nasional (2021)
            </div>
            <div class="list-group-item">
                <strong>Juara 2</strong> – Lomba Kreasi Tari Modern Tingkat Kabupaten (2020)
            </div>
        </div>

        <p class="text-center">
            Prestasi ini menjadi motivasi kami untuk terus berkarya dan melestarikan seni tari bagi generasi mendatang.
        </p>

        <!-- Tombol daftar -->
        <div class="text-center mt-5">
            <a href="{{ route('pendaftaran.create') }}" 
               class="btn btn-lg px-4"
               style="background-color:#d63384; color:white; border-radius:30px; font-weight:bold;">
               Daftar Sekarang
            </a>
        </div>
    </div>
</div>
@endsection
