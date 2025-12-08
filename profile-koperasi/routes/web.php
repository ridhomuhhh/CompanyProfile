<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BerandaController;


// Route diarahkan ke BerandaController
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/tentang-kami', function () {
    return view('pages.about');
})->name('tentang-kami');

Route::get('/berita', function () {
    return view('pages.berita');
})->name('berita');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/produk', function () {
    return view('pages.products');
})->name('produk');

Auth::routes();

// Rute ini sudah benar (memanggil HomeController)
Route::get('/home', [HomeController::class, 'index'])->name('home');
