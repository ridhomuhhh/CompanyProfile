@extends('layouts.app')

@section('content')

<section class="container my-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4 fw-bold">Berita Terbaru</h1>
            <p class="lead text-muted">Informasi dan kegiatan terkini dari Koperasi BUMI.</p>
        </div>
    </div>
</section>

<section class="container mb-5">
    <div class="row g-4">

        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="https://via.placeholder.com/400x250?text=Berita+1" class="card-img-top" alt="Judul Berita 1">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Penyuluhan UKM Sukses Digelar di Tiga Wilayah</h5>
                    <p class="card-text text-muted small">22 Oktober 2025 | Kategori: Acara</p>
                    <p class="card-text">Koperasi BUMI sukses mengadakan penyuluhan bagi para pelaku UKM untuk meningkatkan kualitas produk...</p>
                    <a href="#" class="btn btn-primary mt-auto align-self-start">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="https://via.placeholder.com/400x250?text=Berita+2" class="card-img-top" alt="Judul Berita 2">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Kerjasama Baru dengan Pemasok Bahan Baku Lokal</h5>
                    <p class="card-text text-muted small">21 Oktober 2025 | Kategori: Kemitraan</p>
                    <p class="card-text">Langkah strategis diambil untuk menjamin ketersediaan bahan baku berkualitas bagi seluruh anggota...</p>
                    <a href="#" class="btn btn-primary mt-auto align-self-start">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="https://via.placeholder.com/400x250?text=Berita+3" class="card-img-top" alt="Judul Berita 3">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Digitalisasi Koperasi: Anggota Kini Bisa Transaksi Online</h5>
                    <p class="card-text text-muted small">20 Oktober 2025 | Kategori: Teknologi</p>
                    <p class="card-text">Meluncurkan aplikasi mobile baru untuk mempermudah anggota dalam mengakses layanan dan produk...</p>
                    <a href="#" class="btn btn-primary mt-auto align-self-start">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="https://via.placeholder.com/400x250?text=Berita+4" class="card-img-top" alt="Judul Berita 4">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Tips Mengelola Keuangan untuk Pelaku UKM</h5>
                    <p class="card-text text-muted small">19 Oktober 2025 | Kategori: Tips</p>
                    <p class="card-text">Simak 5 tips praktis dari ahli keuangan kami untuk membantu bisnis Anda tetap sehat dan berkembang...</p>
                    <a href="#" class="btn btn-primary mt-auto align-self-start">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        
        </div>
</section>

<section class="container mb-5">
    <nav aria-label="Navigasi halaman berita">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</section>

@endsection