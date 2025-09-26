@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" style="background-color:#fff0f5;"> 
    <div class="container">
        <h1 class="fw-bold text-center mb-4">Jadwal Latihan</h1>

        <p class="text-center mb-5">
            Berikut adalah jadwal latihan rutin Sanggar Tari Mahera. Jadwal dapat berubah sewaktu-waktu 
            sesuai kebutuhan pertunjukan atau lomba. Pastikan untuk selalu mengecek update terbaru.
        </p>

        <!-- Jadwal Latihan Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped bg-white shadow">
                <thead class="table-danger">
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Tingkat</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sabtu</td>
                        <td>15.00 - 17.00</td>
                        <td>Pemula</td>
                        <td>Latihan dasar gerak tari dan pemanasan.</td>
                    </tr>
                    <tr>
                        <td>Sabtu</td>
                        <td>17.00 - 19.00</td>
                        <td>Menengah</td>
                        <td>Latihan koreografi dasar dan improvisasi.</td>
                    </tr>
                    <tr>
                        <td>Minggu</td>
                        <td>15.00 - 17.00</td>
                        <td>Lanjutan</td>
                        <td>Latihan koreografi lomba & pertunjukan khusus.</td>
                    </tr>
                </tbody>
            </table>
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
