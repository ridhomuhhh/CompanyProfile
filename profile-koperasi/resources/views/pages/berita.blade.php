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
                    <h5 class="card-title fw-bold">Judul Beria 1</h5>
                    <p class="card-text text-muted small">DD/MM/YYYY</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a eleifend velit.... </p>
                    <a href="#" class="btn btn-primary mt-auto align-self-start">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="https://via.placeholder.com/400x250?text=Berita+2" class="card-img-top" alt="Judul Berita 1">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Judul Berita 2</h5>
                    <p class="card-text text-muted small">DD/MM/YYYY</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a eleifend velit.... </p>
                    <a href="#" class="btn btn-primary mt-auto align-self-start">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="https://via.placeholder.com/400x250?text=Berita+3" class="card-img-top" alt="Judul Berita 1">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Judul Berita 3</h5>
                    <p class="card-text text-muted small">DD/MM/YYYY</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a eleifend velit.... </p>
                    <a href="#" class="btn btn-primary mt-auto align-self-start">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <img src="https://via.placeholder.com/400x250?text=Berita+4" class="card-img-top" alt="Judul Berita 1">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Judul Berita 4</h5>
                    <p class="card-text text-muted small">DD/MM/YYYY</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a eleifend velit.... </p>
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