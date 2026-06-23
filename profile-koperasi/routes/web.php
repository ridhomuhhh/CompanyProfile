<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TentangKamiController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentangKami');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

Route::get('/berita/{slug}', [BeritaController::class, 'detailBerita'])->name('berita.detail');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

Auth::routes();
