@extends('layouts.app')

@section('title', 'Jadwal Latihan Sanggar Tari Mahera')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center fw-bold text-primary">Jadwal Latihan Sanggar Tari Mahera</h1>

    <p class="lead text-center mb-5">
        Berikut adalah jadwal latihan rutin Sanggar Tari Mahera.
        Jadwal dapat berubah sewaktu-waktu sesuai kebutuhan pertunjukan atau lomba.
    </p>

    <!-- Jadwal Latihan -->
    <div class="table-responsive shadow-sm">
        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-pink" style="background-color:#f8d7da;">
                <tr>
                    <th>Hari</th>
                    <th>Waktu</th>
                    <th>Kelompok</th>
                    <th>Tempat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin</td>
                    <td>16.00 - 18.00</td>
                    <td>Kelompok Anak-anak</td>
                    <td>Studio Utama Mahera</td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>16.00 - 18.30</td>
                    <td>Kelompok Remaja</td>
                    <td>Studio Utama Mahera</td>
                </tr>
                <tr>
                    <td>Jumat</td>
                    <td>16.00 - 18.30</td>
                    <td>Kelompok Dewasa</td>
                    <td>Balai Desa Karangtengah</td>
                </tr>
                <tr>
                    <td>Minggu</td>
                    <td>08.00 - 11.00</td>
                    <td>Latihan Gabungan (Semua Anggota)</td>
                    <td>Studio Utama Mahera</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="alert alert-info mt-4">
        <strong>Catatan:</strong> Jadwal dapat berubah apabila ada acara
        pentas, lomba, atau kegiatan khusus. Untuk informasi terbaru,
        silakan hubungi pengurus sanggar.
    </div>
</div>
@endsection
