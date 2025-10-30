@extends('layouts.app')

@push('styles')
    {{-- CDN untuk Bootstrap Icons (dipakai di bagian Layanan) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-bs-target="#myCarousel"
      data-bs-slide-to="1"
      aria-label="Slide 2"
    ></button>
  </div>
  <div class="carousel-inner">
    
    <!-- Slide 1: Visi Koperasi -->
    {{-- Ganti URL gambar ini dengan gambar Anda --}}
    <div class="carousel-item active" style="background-image: url('https://placehold.co/1920x800/0d6efd/white?text=Koperasi+TSM')">
      {{-- SVG dihapus dari sini --}}
      <div class="container">
        <div class="carousel-caption text-start">
          <h1 class="display-5 fw-bold">Koperasi TSM</h1>
          <p class="opacity-75 lead">
            "Menjadi koperasi yang mandiri dan mensejahterakan anggota."
          </p>
          <p>
            <a class="btn btn-lg btn-primary" href="{{ url('/about') }}">Pelajari Tentang Kami</a>
          </p>
        </div>
      </div>
    </div>
    
    <!-- Slide 2: Layanan Unggulan (dari Tujuan) -->
    {{-- Ganti URL gambar ini dengan gambar Anda --}}
    <div class="carousel-item" style="background-image: url('https://placehold.co/1920x800/2a9d8f/white?text=Layanan+Kami')">
      {{-- SVG dihapus dari sini --}}
      <div class="container">
        <div class="carousel-caption">
          <h1>Bantuan Peminjaman Modal</h1>
          <p class="lead">
            Salah satu tujuan kami adalah menjadi partner anggota dalam pengembangan usaha dengan memberikan bantuan peminjaman modal.
          </p>
          <p><a class="btn btn-lg btn-primary" href="{{ url('/products') }}">Lihat Semua Layanan</a></p>
        </div>
      </div>
    </div>

    
  </div>
  <button
    class="carousel-control-prev"
    type="button"
    data-bs-target="#myCarousel"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-bs-target="#myCarousel"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
  
  <!-- Tiga kolom layanan unggulan (dari Tujuan Koperasi) -->
  <div class="row text-center">
    
    <div class="col-lg-4">
      {{-- Mengganti SVG dengan Bootstrap Icon --}}
      <i class="bi bi-people-fill display-3 text-primary"></i>
      <h2 class="fw-normal mt-3">Kesejahteraan Anggota</h2>
      <p>
        Tujuan utama kami adalah meningkatkan kesejahteraan seluruh anggota koperasi.
      </p>
      <p>
        <a class="btn btn-secondary" href="{{ url('/about') }}#tujuan">View details &raquo;</a>
      </p>
    </div>
    <!-- /.col-lg-4 -->
    
    <div class="col-lg-4">
      {{-- Mengganti SVG dengan Bootstrap Icon --}}
      <i class="bi bi-wallet-fill display-3 text-primary"></i>
      <h2 class="fw-normal mt-3">Melayani Kebutuhan</h2>
      <p>
        Menyediakan berbagai produk simpanan dan layanan untuk melayani kebutuhan anggota.
      </p>
      <p>
        <a class="btn btn-secondary" href="{{ url('/products') }}">View details &raquo;</a>
      </p>
    </div>
    <!-- /.col-lg-4 -->
    
    <div class="col-lg-4">
      {{-- Mengganti SVG dengan Bootstrap Icon --}}
      <i class="bi bi-cash-coin display-3 text-primary"></i>
      <h2 class="fw-normal mt-3">Bantuan Modal</h2>
      <p>
        Siap menjadi partner anggota dalam pengembangan usaha melalui bantuan peminjaman modal.
      </p>
      <p>
        <a class="btn btn-secondary" href="{{ url('/products') }}">View details &raquo;</a>
      </p>
    </div>
    <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->

  <section class="container my-5 py-5">
    <div class="row align-items-center g-5">
        
        <div class="col-lg-6">
            <img src="https://placehold.co/600x400/0d6efd/white?text=Koperasi+TSM" 
                 alt="Karyawan Koperasi TSM" 
                 class="img-fluid rounded shadow-lg">
        </div>
        
        <div class="col-lg-6">
            <h2 class="display-5 fw-bold">Visi & Misi Koperasi TSM</h2>
            
            <!-- Mengganti Lorem Ipsum dengan Visi & Misi dari PPT -->
            <h3 class="h4 text-primary mt-4">Visi</h3>
            <p class="lead text-muted">
                "Menjadi koperasi yang mandiri dan mensejahterakan anggota"
            </p>

            <h3 class="h4 text-primary mt-4">Misi</h3>
            <ul class="lead text-muted ps-3" style="list-style-type: disc;">
                <li>Menjalankan manajemen yang profesional dan taat hukum</li>
                <li>Menjalin kerja sama dan sinergi dengan pihak terkait</li>
                <li>Menjadi partner anggota dalam pengembangan usaha</li>
            </ul>
        </div>

    </div>
</section>

@endsection

