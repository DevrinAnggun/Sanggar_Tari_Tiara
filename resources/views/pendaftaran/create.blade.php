<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa - Sanggar Tari Mahera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* 🌸 GENERAL THEME */
    body {
        background-color: #ffe4ec; /* pink lembut */
        padding-top: 80px;
    }

    /* 🌸 NAVBAR */
    .navbar-mahera {
        background-color: rgba(255,255,255,0.95);
        border-bottom: 2px solid #ff69b4;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        backdrop-filter: blur(6px);
    }

    .navbar-nav .nav-link {
        font-weight: 500;
        color: #333 !important;
        margin-right: 20px;
    }
    .navbar-nav .nav-link:hover {
        color: #d63384 !important;
    }
    .btn-auth {
        background-color: #d63384;
        color: #fff !important;
        font-weight: bold;
        border-radius: 20px;
        padding: 6px 15px;
    }
    .btn-auth:hover {
        background-color: #b02a6f;
        color: #fff !important;
    }

    /* 🌸 FORM INPUT (fix biar selalu pink) */
    form .form-control,
    form select,
    form textarea {
        background-color: #ffe6f2 !important; /* pink halus */
        border: 1px solid #f5b6d6 !important; /* border pink */
        border-radius: 8px !important;
        color: #333 !important;
    }
    form .form-control:focus,
    form select:focus,
    form textarea:focus {
        background-color: #ffd6eb !important; /* lebih terang saat fokus */
        border-color: #ff66b2 !important;
        box-shadow: 0 0 5px rgba(255, 102, 178, 0.6) !important;
        outline: none !important;
    }

    /* 🌸 TOMBOL FORM */
    .btn-mahera {
        background-color: #ff69b4;
        color: white;
        border-radius: 8px;
        padding: 8px 16px;
        font-weight: bold;
        transition: 0.3s;
    }
    .btn-mahera:hover {
        background-color: #ff4da6;
        color: white;
    }

    /* 🌸 RESPONSIF */
    @media (max-width: 768px) {
      #carouselMahera .carousel-item img {
          height: 250px;
      }
    }
    </style>
</head>
<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-mahera shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="{{ asset('images/logo-mahera.png') }}" alt="Logo Mahera" style="height:40px; margin-right:10px;">
      <span class="fw-bold text-dark">Sanggar Tari Mahera</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('sejarah') }}">Sejarah</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('informasi') }}">Informasi</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('jadwal') }}">Jadwal Latihan</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('prestasi') }}">Prestasi</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('kegiatan') }}">Kegiatan</a></li>
      </ul>
      <div class="ms-3">
        <a href="{{ route('pendaftaran.create') }}" class="btn btn-auth">Daftar</a>
      </div>
    </div>
  </div>
</nav>

<!-- 🌸 MAIN CONTENT -->
<main class="flex-grow-1">
  <div class="container py-5">
    <div class="card p-4 shadow bg-white">
      <div class="mb-4 d-flex align-items-center justify-content-center">
        <img src="{{ asset('images/logo-mahera.png') }}" alt="Logo Mahera" style="height:50px; margin-right:12px;">
        <h2 class="m-0 fw-bold text-center" style="color:#b02a6f;">Formulir Pendaftaran Siswa</h2>
      </div>

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('pendaftaran.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Usia</label>
          <select name="usia" class="form-control" required>
            <option value="">-- Pilih Usia --</option>
            <option value="5">5-10 tahun</option>
            <option value="15">11-15 tahun</option>
            <option value="20">>16 tahun</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Nomor HP</label>
          <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Pilih Jadwal Kelas Latihan</label>
          <select name="jadwal_kelas" class="form-control" required>
            <option value="">-- Pilih Jadwal --</option>
            <option value="Senin & Rabu (16.00 - 18.00)">Senin & Rabu (16.00 - 18.00)</option>
            <option value="Selasa & Kamis (16.00 - 18.00)">Selasa & Kamis (16.00 - 18.00)</option>
            <option value="Sabtu (09.00 - 11.00)">Sabtu (09.00 - 11.00)</option>
            <option value="Minggu (09.00 - 11.00)">Minggu (09.00 - 11.00)</option>
          </select>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-mahera">Daftar</button>
          <a href="/" class="btn btn-secondary ms-2">Kembali</a>
        </div>
      </form>
    </div>
  </div>
</main>

<!-- 🌸 Keterangan Pembayaran -->
<div class="mt-4 p-4 text-center" 
     style="background-color:#ffe6f2; border:2px solid #ff69b4; border-radius:10px; max-width:700px; margin:auto;">
    <h5 class="fw-bold" style="color:#d63384;">Keterangan</h5>
    <p class="mb-2">Pembayaran setiap pertemuan bisa dibayar melalui transfer:</p>
    <p class="fw-bold mb-1" style="color:#b02a6f;">
        BNI : 1234567890 (a.n Sanggar Tari Mahera)<br>
        BRI : 0987654321 (a.n Sanggar Tari Mahera)
    </p>
    <p class="mb-0">
        DP (Uang Muka) bisa dibayar melalui transfer BNI & BRI<br>
        atau langsung saat latihan pertemuan pertama.
    </p>
</div>

<!-- 🌸 Footer -->
<div class="container-fluid text-center mt-4 pt-3" style="background-color:#d63384; color:white; padding: 10px 0; margin:0;">
  <p class="mb-0 small fw-bold">Design by Devrin Anggun Saputri &copy; 2025</p>
</div>

</body>
</html>
