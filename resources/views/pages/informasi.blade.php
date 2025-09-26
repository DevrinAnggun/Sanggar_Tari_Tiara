@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" style="background-color:#fff0f5;"> 
    <div class="container">
        <h1 class="fw-bold text-center mb-4">Informasi Sanggar Tari Mahera</h1>

        <p class="lead text-center">
            Dapatkan informasi lengkap mengenai kegiatan, jadwal latihan, dan cara bergabung dengan Sanggar Tari Mahera.
        </p>

        <hr class="my-4">

        <h3 class="mb-3">Program Latihan</h3>
        <ul>
            <li>Latihan rutin setiap hari Sabtu dan Minggu di Sanggar Tari Mahera.</li>
            <li>Kelas untuk berbagai tingkat: pemula, menengah, dan lanjutan.</li>
            <li>Pelatihan khusus untuk persiapan lomba dan pertunjukan.</li>
        </ul>

        <h3 class="mb-3 mt-4">Fasilitas</h3>
        <ul>
            <li>Ruang latihan luas dan nyaman.</li>
            <li>Kostum dan perlengkapan tari tersedia untuk anggota.</li>
            <li>Bimbingan langsung dari pelatih profesional.</li>
        </ul>

        <div class="text-center mt-5">
            <a href="{{ route('pendaftaran.create') }}" 
               class="btn btn-lg px-4"
               style="background-color:#d63384; color:white; border-radius:30px;">
               Daftar Sekarang
            </a>
        </div>
    </div>
</div>
@endsection
