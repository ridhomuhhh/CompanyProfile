@extends('layouts.app')

@push('styles')
  {{-- Kita hanya perlu CDN ikon di sini. CSS lainnya sudah via app.css --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')
  <!-- ============================================= -->
  <!--                 BAGIAN CAROUSEL               -->
  <!-- ============================================= -->
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active"
        style="background-image: url('https://placehold.co/1920x800/0d6efd/white?text=Koperasi+TSM')">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="display-5 fw-bold">Koperasi TSM</h1>
            <p class="opacity-75 lead">"Menjadi koperasi yang mandiri dan mensejahterakan anggota."</p>
            <p><a class="btn btn-lg btn-primary" href="{{ url('/about') }}">Pelajari Tentang Kami</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item"
        style="background-image: url('https://placehold.co/1920x800/2a9d8f/white?text=Layanan+Kami')">
        <div class="container">
          <div class="carousel-caption">
            <h1>Bantuan Peminjaman Modal</h1>
            <p class="lead">Salah satu tujuan kami adalah menjadi partner anggota dalam pengembangan usaha.</p>
            <p><a class="btn btn-lg btn-primary" href="{{ url('/products') }}">Lihat Semua Layanan</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- ============================================= -->
  <!--             BAGIAN LAYANAN UNGGULAN           -->
  <!-- ============================================= -->
  <div class="container marketing mt-5">
    <div class="row text-center">
      <div class="col-lg-4">
        <i class="bi bi-people-fill display-3 text-primary"></i>
        <h2 class="fw-normal mt-3">Kesejahteraan Anggota</h2>
        <p>Tujuan utama kami adalah meningkatkan kesejahteraan seluruh anggota koperasi.</p>
      </div>
      <div class="col-lg-4">
        <i class="bi bi-wallet-fill display-3 text-primary"></i>
        <h2 class="fw-normal mt-3">Melayani Kebutuhan</h2>
        <p>Menyediakan berbagai produk simpanan dan layanan untuk melayani kebutuhan anggota.</p>
      </div>
      <div class="col-lg-4">
        <i class="bi bi-cash-coin display-3 text-primary"></i>
        <h2 class="fw-normal mt-3">Bantuan Modal</h2>
        <p>Siap menjadi partner anggota dalam pengembangan usaha melalui bantuan peminjaman modal.</p>
      </div>
    </div>
    <hr class="featurette-divider">
  </div>


  <!-- ============================================= -->
  <!--      (BARU) GALERI KEGIATAN MOZAIK            -->
  <!-- ============================================= -->
  <section class="container my-5">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold">Galeri</h2>
      <p class="lead text-muted">Momen kebersamaan dan aktivitas terbaru Koperasi TSM</p>
    </div>

    <div class="gallery-grid">

      <!-- Gambar 1 (UTAMA - BESAR) -->
      <div class="gallery-item-main">
        <div class="gallery-card">
          <img src="https://placehold.co/800x800/003366/FFF?text=RAT+Tahun+2024" alt="RAT 2024">
          <div class="gallery-overlay">
            <h5 class="fw-bold">Rapat Anggota Tahunan 2024</h5>
            <p class="small mb-0">Surabaya, 27 Maret 2025</p>
          </div>
        </div>
      </div>

      <!-- Gambar 2 (Kecil) -->
      <div class="gallery-item">
        <div class="gallery-card">
          <img src="https://placehold.co/400x400/0d6efd/FFF?text=Pelatihan" alt="Pelatihan">
          <div class="gallery-overlay">
            <h6 class="fw-bold">Pelatihan Anggota</h6>
          </div>
        </div>
      </div>

      <!-- Gambar 3 (Kecil) -->
      <div class="gallery-item">
        <div class="gallery-card">
          <img src="https://placehold.co/400x400/2a9d8f/FFF?text=Bakti+Sosial" alt="Bakti Sosial">
          <div class="gallery-overlay">
            <h6 class="fw-bold">Bakti Sosial</h6>
          </div>
        </div>
      </div>

      <!-- Gambar 4 (Lebar) -->
      <div class="gallery-item-wide">
        <div class="gallery-card">
          <img src="https://placehold.co/800x400/e76f51/FFF?text=Kunjungan+Usaha" alt="Kunjungan Usaha">
          <div class="gallery-overlay">
            <h5 class="fw-bold">Kunjungan Usaha Anggota</h5>
            <p class="small mb-0">Pendampingan langsung ke lokasi usaha</p>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Akhir Bagian Galeri -->


  <!-- ============================================= -->
  <!--       (BARU) BAGIAN TESTIMONI ANGGOTA         -->
  <!-- ============================================= -->
  <section class="container-fluid bg-light my-5 py-5">
    <div class="container">
      <h2 class="display-5 fw-bold text-center mb-5">Apa Kata Anggota Kami?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body p-4">
              <i class="bi bi-quote fs-1 text-primary"></i>
              <p class="lead text-muted mt-3 fst-italic">"Bergabung dengan Koperasi TSM adalah keputusan terbaik.
                Pelayanannya profesional dan sangat membantu usaha saya."</p>
              <hr>
              <div class="d-flex align-items-center">
                <img src="https://placehold.co/60x60/EBF4FF/0d6efd?text=A" class="rounded-circle" alt="Anggota 1">
                <div class="ms-3">
                  <h6 class="fw-bold mb-0">Anggota A</h6>
                  <span class="text-muted small">Pemilik Usaha</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body p-4">
              <i class="bi bi-quote fs-1 text-primary"></i>
              <p class="lead text-muted mt-3 fst-italic">"Simpanan di TSM aman dan jelas perhitungannya. Saya merasa
                tenang menabung di sini untuk masa depan."</p>
              <hr>
              <div class="d-flex align-items-center">
                <img src="https://placehold.co/60x60/EBF4FF/0d6efd?text=B" class="rounded-circle" alt="Anggota 2">
                <div class="ms-3">
                  <h6 class="fw-bold mb-0">Anggota B</h6>
                  <span class="text-muted small">Anggota Sejak 2010</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body p-4">
              <i class="bi bi-quote fs-1 text-primary"></i>
              <p class="lead text-muted mt-3 fst-italic">"Proses pinjaman modalnya cepat dan tidak berbelit-belit. Sangat
                membantu saat usaha saya butuh dana cepat."</p>
              <hr>
              <div class="d-flex align-items-center">
                <img src="https://placehold.co/60x60/EBF4FF/0d6efd?text=C" class="rounded-circle" alt="Anggota 3">
                <div class="ms-3">
                  <h6 class="fw-bold mb-0">Anggota C</h6>
                  <span class="text-muted small">Anggota UKM</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ============================================= -->
  <!--        (BARU) BAGIAN BERITA TERBARU           -->
  <!-- ============================================= -->
  <section class="container my-5 py-5">
    <div class="container">
      <h2 class="display-5 fw-bold text-center mb-5">Berita & Kegiatan Terbaru</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="https://placehold.co/600x400/ced4da/white?text=RAT+2024" class="card-img-top" alt="RAT 2024">
            <div class="card-body p-4">
              <h5 class="card-title fw-bold">Koperasi TSM Sukses Menyelenggarakan RAT Tahun 2024</h5>
              <p class="card-text text-muted small">27 Maret 2025</p>
              <p class="card-text">Sebagai bentuk transparansi, Koperasi TSM telah menggelar Rapat Anggota Tahunan di
                Surabaya...</p>
              <a href="#" class="btn btn-outline-primary stretched-link">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="https://placehold.co/600x400/ced4da/white?text=Kantor+Baru" class="card-img-top"
              alt="Kantor Baru">
            <div class="card-body p-4">
              <h5 class="card-title fw-bold">Koperasi TSM Resmi Menempati Kantor Baru</h5>
              <p class="card-text text-muted small">Tahun 2020</p>
              <p class="card-text">Untuk meningkatkan pelayanan, kami pindah ke kantor baru yang lebih representatif dan
                nyaman bagi anggota...</p>
              <a href="#" class="btn btn-outline-primary stretched-link">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <img src="https://placehold.co/600x400/ced4da/white?text=Pendidikan" class="card-img-top"
              alt="Pendidikan Anggota">
            <div class="card-body p-4">
              <h5 class="card-title fw-bold">Program Pendidikan Perkoperasian untuk Anggota</h5>
              <p class="card-text text-muted small">Berkelanjutan</p>
              <p class="card-text">Sesuai prinsip koperasi, kami rutin melaksanakan pendidikan untuk meningkatkan
                kemampuan anggota...</p>
              <a href="#" class="btn btn-outline-primary stretched-link">{{ $kontaks?->email }}</a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <a href="{{ url('/berita') }}" class="btn btn-primary btn-lg">Lihat Semua Berita</a>
      </div>
    </div>
  </section>
@endsection
