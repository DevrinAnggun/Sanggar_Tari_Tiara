@extends('layouts.app')

@section('title', 'Informasi Sanggar Tari Mahera')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Informasi Sanggar Tari Mahera</h1>

    <p>
        Halaman ini berisi berbagai informasi penting mengenai kegiatan,
        pendaftaran, serta pengumuman terbaru dari Sanggar Tari Mahera.
    </p>

    <hr class="my-4">

    <h3 class="mb-3">Pengumuman Terbaru</h3>
    <ul class="list-group mb-4">
        <li class="list-group-item">
            <strong>Latihan Rutin:</strong> Setiap Selasa dan Kamis pukul 16.00 – 18.00 WIB
        </li>
        <li class="list-group-item">
            <strong>Pendaftaran Anggota Baru:</strong> Dibuka mulai 1 Oktober – 30 Oktober 2025
        </li>
        <li class="list-group-item">
            <strong>Event Pentas Seni:</strong> 15 November 2025 di Gedung Budaya Banjarnegara
        </li>
    </ul>

    <h3 class="mb-3">Kontak & Lokasi</h3>
    <p>
        Alamat: Jl. Mawar No. 12, Banjarnegara, Jawa Tengah <br>
        Telp/WA: 0812-3456-7890 <br>
        Instagram: <a href="https://instagram.com/sanggartari.mahera" target="_blank">@sanggartari.mahera</a>
    </p>

    <div class="mt-4">
        <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary">
            Daftar Sekarang
        </a>
    </div>
</div>
@endsection
