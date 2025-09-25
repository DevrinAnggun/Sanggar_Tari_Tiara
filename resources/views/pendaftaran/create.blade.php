<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa - Sanggar Tari Mahera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ff69b4, #d63384);
        }
        .card {
            border: 2px solid #ff69b4;
            border-radius: 15px;
        }
        h2 {
            color: #000;
            font-weight: bold;
        }
        .btn-mahera {
            background-color: #d63384;
            color: #fff;
            border-radius: 30px;
            padding: 10px 20px;
        }
        .btn-mahera:hover {
            background-color: #b02a6f;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="card p-4 shadow bg-white">
        <h2 class="mb-4">Formulir Pendaftaran Siswa</h2>

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
                <label class="form-label">Nomor HP</label>
                <input type="text" name="no_hp" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-mahera">Daftar</button>
            <a href="/" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

</body>
</html>
