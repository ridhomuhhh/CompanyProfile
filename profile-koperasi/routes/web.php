<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TentangKamiController;

// Route diarahkan ke BerandaController
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentangKami');

// Route Halaman List Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

// Route Halaman Baca Berita (Menggunakan {slug} agar dinamis)
Route::get('/berita/{slug}', [BeritaController::class, 'detailBerita'])->name('berita.detail');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

Auth::routes();

// Rute ini sudah benar (memanggil HomeController)
Route::get('/home', [HomeController::class, 'index'])->name('home');
