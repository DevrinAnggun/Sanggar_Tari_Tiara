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

    /* Carousel custom */
    #carouselMahera {
        max-width: 1100px;
        margin: 0 auto;
        /* border-radius: 0;  <-- hilangkan radius supaya siku */
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }

    #carouselMahera .carousel-item img {
        width: 100%;
        height: 450px;
        object-fit: cover;
        animation: zoomEffect 8s ease-in-out forwards;
    }

    @keyframes zoomEffect {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
    }

    .carousel-caption {
        background: rgba(0,0,0,0.4);
        border-radius: 8px; /* caption tetap sedikit rounded agar cantik */
        padding: 10px 15px;
    }

    /* Responsif untuk HP */
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

<!-- Company Profile -->
<div class="container-fluid py-5 motif-bg">
  <div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Sanggar Tari Mahera</h1>
        <p class="lead">Melestarikan budaya melalui gerak dan seni</p>
    </div>

    <!-- SLIDER -->
    <div id="carouselMahera" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/gbr1.jpg') }}" class="d-block w-100" alt="Tari 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Sanggar Seni Mahera</h5>
            <p>"Pegang Teguh Seni Tradisi Siap Berkreasi"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/gbr2.jpg') }}" class="d-block w-100" alt="Tari 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Melestarikan Budaya</h5>
            <p>Kami hadir untuk menghidupkan kembali tari tradisional Banjarnegara</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/gbr3.jpg') }}" class="d-block w-100" alt="Tari 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ruang Kreativitas</h5>
            <p>Menciptakan karya inovatif dan berprestasi</p>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselMahera" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselMahera" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Selanjutnya</span>
      </button>

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselMahera" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselMahera" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselMahera" data-bs-slide-to="2"></button>
      </div>
    </div>
<!-- Section Pendiri + Latar Belakang -->
<section id="pendiri" class="py-5" style="background-color:#ffe4ec;">
  <div class="container">

<!-- Bagian Tentang Sanggar (gambar kiri) -->
<div class="row align-items-center mb-5">
  <div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('images/mahera.jpg') }}" 
         alt="Sanggar Tari Mahera" 
         class="img-fluid shadow-lg" 
         style="max-width: 60%; border-radius: 0; object-fit: cover;">
  </div>
  <div class="col-md-7">
    <h2 class="fw-bold mb-3" style="color:#b02a6f;">Tentang Sanggar Tari Mahera</h2>
    <p>
      Sanggar Tari Mahera adalah wadah pengembangan seni tari di Banjarnegara yang berdiri sejak 
      tahun 2010. Sanggar ini berkomitmen untuk melestarikan tarian tradisional sekaligus membuka 
      ruang bagi inovasi tari kreasi modern.
    </p>
    <p>
      Kegiatan di sanggar mencakup latihan rutin, pembinaan teknik tari, persiapan lomba, serta 
      pertunjukan seni pada berbagai acara. Sanggar Mahera juga menjadi tempat berkumpulnya generasi muda 
      yang ingin belajar, berkolaborasi, dan mengembangkan kreativitas melalui seni tari.
    </p>
    <p>
      Dengan dukungan pelatih berpengalaman, sanggar ini berhasil mencetak banyak penari berbakat 
      yang berprestasi di tingkat daerah maupun provinsi, sekaligus memperkenalkan budaya Banjarnegara 
      kepada masyarakat luas.
    </p>
  </div>
</div>

    <!-- Bagian Latar Belakang (gambar kanan) -->
    <div class="row align-items-center flex-md-row-reverse">
      <div class="col-md-5 text-center mb-4 mb-md-0">
        <img src="{{ asset('images/gbr4.jpg') }}" 
             alt="Latar Belakang Mahera" 
             class="img-fluid shadow-lg" 
             style="max-width: 60%; border-radius: 0; object-fit: cover;">
      </div>
      <div class="col-md-7">
        <h2 class="fw-bold mb-3" style="color:#b02a6f;">Latar Belakang</h2>
        <p>
          Kehadiran Sanggar Tari Mahera berawal dari keprihatinan terhadap berkurangnya minat 
          generasi muda terhadap seni tari tradisional. Melihat hal ini, pendiri berinisiatif 
          mendirikan wadah pembelajaran yang tidak hanya mengajarkan teknik tari, 
          tetapi juga nilai-nilai budaya, kedisiplinan, dan kebersamaan.
        </p>
        <p>
          Dengan dukungan masyarakat dan semangat para siswa, sanggar ini terus tumbuh 
          dan menjadi pusat kegiatan seni yang dikenal di Banjarnegara, 
          mengadakan pertunjukan, lomba, dan pelatihan yang melibatkan berbagai kalangan.
        </p>
      </div>
    </div>
<!-- Bagian Biografi Pendiri -->
<div class="row align-items-center mb-5">
  <div class="col-md-5 text-center mb-4 mb-md-0">
    <img src="{{ asset('images/mahera.jpg') }}" 
         alt="Pendiri Sanggar Mahera" 
         class="img-fluid shadow-lg" 
         style="max-width: 60%; border-radius: 0; object-fit: cover;">
  </div>
  <div class="col-md-7">
    <h2 class="fw-bold mb-3" style="color:#b02a6f;">Pendiri Sanggar Tari Mahera</h2>
    <p>
      Sanggar Tari Mahera didirikan oleh <strong>Ibu Mahera, S.Pd</strong>, seorang lulusan Pendidikan Seni Tari 
      dari Universitas Negeri Yogyakarta yang memiliki kecintaan mendalam terhadap seni dan budaya tradisional.
    </p>
    <p>
      Dengan semangat pelestarian budaya, beliau memulai sanggar ini pada tahun 2010 dengan melatih sekelompok kecil anak-anak 
      di lingkungan sekitar. Dedikasi dan kerja keras beliau membuat sanggar ini berkembang pesat hingga dikenal luas 
      sebagai pusat pembinaan seni tari di Banjarnegara.
    </p>
    <p>
      Selain menjadi pendiri, beliau juga berperan sebagai pelatih utama yang mengajarkan teknik tari tradisional dan modern, 
      serta menanamkan nilai disiplin, kebersamaan, dan rasa cinta terhadap budaya bangsa kepada para penari.
    </p>
  </div>
  </div>
  </div>
</section>


    <!-- Tentang Kami -->
    <section id="tentang" class="mb-5">
        <h2 class="mb-3">Tentang Kami</h2>
        <p>
            Sanggar Tari Mahera adalah wadah seni tari di Banjarnegara yang berfokus pada pelestarian dan 
            pengembangan seni tari tradisional maupun kreasi modern. Kami memberikan ruang bagi generasi muda 
            untuk belajar, berkarya, dan berprestasi melalui seni tari.
        </p>
    </section>
  </div>
</div>

<!-- FOOTER -->
<footer class="bg-light text-dark pt-5 mt-5 border-top">
  <div class="container">
    <div class="row">
      <!-- Kolom 1: Maps -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3" style="color:#b02a6f;">Lokasi Kami</h5>
        <div class="ratio ratio-4x3 rounded shadow-sm">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.65929472008!2d109.69324667500098!3d-7.392020992617793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa966412f2ae5%3A0xf6db553d6cd1f7d!2sSanggar%20Tari%20Tiara!5e0!3m2!1sid!2sid!4v1758900488197!5m2!1sid!2sid" 
          width="600" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <!-- Kolom 2: Nama & Alamat -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3" style="color:#b02a6f;">Sanggar Tari Mahera</h5>
        <p>
          Jl. Raya Karangtengah No. 10, Banjarnegara<br>
          Jawa Tengah, Indonesia 53418
        </p>
        <p>
          Buka setiap: <br>
          <strong>Senin - Sabtu, 16.00 - 20.00 WIB</strong>
        </p>
      </div>

      <!-- Kolom 3: Kontak & Medsos -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3" style="color:#b02a6f;">Kontak & Sosial Media</h5>
        <p>
          <strong>Telepon:</strong> 0812-3456-7890<br>
          <strong>Email:</strong> info@sanggartari-mahera.com
        </p>
        <div class="d-flex gap-3">
          <a href="https://wa.me/6281234567890" target="_blank" class="text-dark fs-4">
            <i class="bi bi-whatsapp"></i>
          </a>
          <a href="https://instagram.com/sanggartari.mahera" target="_blank" class="text-dark fs-4">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://facebook.com/sanggartari.mahera" target="_blank" class="text-dark fs-4">
            <i class="bi bi-facebook"></i>
          </a>
        </div>
      </div>
    </div>

<!-- Credit -->
<div class="container-fluid text-center mt-4 pt-3" style="background-color:#ff69b4; color:white; padding: 10px 0; margin:0;">
  <p class="mb-0 small fw-bold">Design by Devrin Anggun Saputri &copy; 2025</p>
</div>
</footer>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
