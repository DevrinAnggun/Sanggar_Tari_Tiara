<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanggar Tari Mahera</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* HEADER */
    .navbar-mahera {
        background-color: rgba(255,255,255,0.95);
        border-bottom: 2px solid #ff69b4;
        position: fixed;      /* sticky header */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        backdrop-filter: blur(6px); /* efek elegan */
    }
    body {
        padding-top: 80px; /* biar konten ga ketiban header */
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

    /* Background motif halus */
    .motif-bg {
        background-color:#fff0f5;
        background-image: url('https://www.transparenttextures.com/patterns/asfalt-light.png'); /* tekstur halus */
        background-repeat: repeat;
    }

    /* Judul & section */
    h1, h2 {
        color: #b02a6f;
    }
  </style>
</head>
<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-mahera shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="{{ asset('images/logo-mahera.jpg') }}" alt="Logo Mahera" style="height:40px; margin-right:10px;">
      <span class="fw-bold text-dark">Sanggar Tari Mahera</span>
    </a>

    <!-- Menu -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#sejarah">Sejarah</a></li>
        <li class="nav-item"><a class="nav-link" href="#informasi">Informasi</a></li>
        <li class="nav-item"><a class="nav-link" href="#jadwal">Jadwal Latihan</a></li>
        <li class="nav-item"><a class="nav-link" href="#prestasi">Prestasi</a></li>
        <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan</a></li>
      </ul>

      <!-- Tombol Daftar/Login -->
      <div class="ms-3">
        <a href="{{ route('pendaftaran.create') }}" class="btn btn-auth">Daftar</a>
      </div>
    </div>
  </div>
</nav>

<!-- Company Profile -->
<div class="container-fluid py-5 motif-bg">
  <div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Sanggar Tari Mahera</h1>
        <p class="lead">Melestarikan budaya melalui gerak dan seni</p>
    </div>

    <!-- Tentang Kami -->
    <section id="tentang" class="mb-5">
        <h2 class="mb-3">Tentang Kami</h2>
        <p>
            Sanggar Tari Mahera adalah wadah seni tari di Banjarnegara yang berfokus pada pelestarian dan 
            pengembangan seni tari tradisional maupun kreasi modern. Kami memberikan ruang bagi generasi muda 
            untuk belajar, berkarya, dan berprestasi melalui seni tari.
        </p>
    </section>

    <!-- Visi -->
    <section id="visi" class="mb-5">
        <h2 class="mb-3">Visi</h2>
        <p>
            Menjadi sanggar tari yang berperan aktif dalam melestarikan budaya bangsa dan mencetak penari-penari 
            yang berprestasi di tingkat lokal maupun nasional.
        </p>
    </section>

    <!-- Misi -->
    <section id="misi" class="mb-5">
        <h2 class="mb-3">Misi</h2>
        <ul>
            <li>Menyediakan pembelajaran tari yang berkualitas untuk semua kalangan.</li>
            <li>Mengadakan pertunjukan, lomba, dan kegiatan seni untuk meningkatkan kreativitas.</li>
            <li>Melestarikan budaya lokal melalui inovasi dalam tarian tradisional.</li>
            <li>Menumbuhkan rasa cinta terhadap seni dan budaya Indonesia.</li>
        </ul>
    </section>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
