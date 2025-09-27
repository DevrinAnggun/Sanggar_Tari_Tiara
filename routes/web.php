<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PendaftaranController;

// ✅ Halaman utama tetap landing page (file Blade di atas)
Route::view('/', 'welcome')->name('home');

// ✅ Pendaftaran
Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/', function () {
    return view('welcome'); // otomatis buka welcome.blade.php
})->name('beranda');

// ✅ Halaman lain
Route::get('/sejarah', [PageController::class, 'sejarah'])->name('sejarah');
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
Route::get('/jadwal', [PageController::class, 'jadwal'])->name('jadwal');
Route::get('/prestasi', [PageController::class, 'prestasi'])->name('prestasi');
Route::get('/kegiatan', [PageController::class, 'kegiatan'])->name('kegiatan');
