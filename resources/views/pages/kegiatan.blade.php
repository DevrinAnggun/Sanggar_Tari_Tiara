@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" style="background-color:#fff0f5;"> 
    <div class="container">
        <h1 class="fw-bold text-center mb-4">Kegiatan Sanggar Tari Mahera</h1>

        <p class="text-center mb-5">
            Sanggar Tari Mahera aktif mengadakan berbagai kegiatan untuk mendukung pelestarian budaya, 
            mengembangkan kreativitas, dan mempererat kebersamaan antar anggota.
        </p>

        <!-- Daftar Kegiatan -->
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title text-pink fw-bold">Latihan Rutin</h5>
                        <p class="card-text">
                            Latihan rutin setiap akhir pekan untuk meningkatkan kemampuan teknik tari 
                            dan mempersiapkan anggota untuk pertunjukan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title text-pink fw-bold">Workshop & Pelatihan</h5>
                        <p class="card-text">
                            Kegiatan belajar bersama pelatih tamu dari berbagai daerah untuk memperluas wawasan 
                            dan menambah pengalaman anggota.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title text-pink fw-bold">Pertunjukan Tari</h5>
                        <p class="card-text">
                            Partisipasi dalam acara seni, pameran budaya, dan pentas lokal hingga nasional 
                            sebagai sarana memperkenalkan karya tari Mahera.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title text-pink fw-bold">Lomba & Kompetisi</h5>
                        <p class="card-text">
                            Mengikuti berbagai lomba tari untuk mengasah kemampuan dan mengharumkan nama sanggar.
                        </p>
                    </div>
                </div>
            </div>
        </div>

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
