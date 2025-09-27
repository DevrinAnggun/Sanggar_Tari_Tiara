<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Sanggar Tari Mahera')</title>
    {{-- Bootstrap CSS (jika pakai Bootstrap) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
<style>
    /* HEADER */
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
    body {
        padding-top: 80px;
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
        background-image: url('https://www.transparenttextures.com/patterns/asfalt-light.png');
        background-repeat: repeat;
    }

    h1, h2 {
        color: #b02a6f;
    }
</style>

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
        <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}">Beranda</a></li>
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
        @yield('content')
    </main>

<!-- Credit -->
<div class="container-fluid text-center mt-4 pt-3" style="background-color:#d63384; color:white; padding: 10px 0; margin:0;">
  <p class="mb-0 small fw-bold">Design by Devrin Anggun Saputri &copy; 2025</p>
</div>
</footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
