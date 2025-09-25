<?php

use App\Http\Controllers\PendaftaranController;

Route::get('/', [PendaftaranController::class, 'index']);
Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
