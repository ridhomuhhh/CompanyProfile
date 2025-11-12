@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')

<!-- ============================================= -->
<!--                 BAGIAN CAROUSEL               -->
<!-- ============================================= -->
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
    
    <div class="carousel-item active" style="background-image: url('https://placehold.co/1920x800/0d6efd/white?text=Koperasi+TSM')">
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
    
    <div class="carousel-item" style="background-image: url('https://placehold.co/1920x800/2a9d8f/white?text=Layanan+Kami')">
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


<!-- ============================================= -->
<!--             BAGIAN LAYANAN UNGGULAN           -->
<!-- ============================================= -->
<!-- (Perbaikan: Menambahkan container marketing) -->
<div class="container marketing"> 
  <div class="row text-center">
    
    <div class="col-lg-4">
      <i class="bi bi-people-fill display-3 text-primary"></i>
      <h2 class="fw-normal mt-3">Kesejahteraan Anggota</h2>
      <p>
        Tujuan utama kami adalah meningkatkan kesejahteraan seluruh anggota koperasi.
      </p>
      <p>
        <a class="btn btn-secondary" href="{{ url('/about') }}#tujuan">View details &raquo;</a>
      </p>
    </div>
    
    <div class="col-lg-4">
      <i class="bi bi-wallet-fill display-3 text-primary"></i>
      <h2 class="fw-normal mt-3">Melayani Kebutuhan</h2>
      <p>
        Menyediakan berbagai produk simpanan dan layanan untuk melayani kebutuhan anggota.
      </p>
      <p>
        <a class="btn btn-secondary" href="{{ url('/products') }}">View details &raquo;</a>
      </p>
    </div>
    
    <div class="col-lg-4">
      <i class="bi bi-cash-coin display-3 text-primary"></i>
      <h2 class="fw-normal mt-3">Bantuan Modal</h2>
      <p>
        Siap menjadi partner anggota dalam pengembangan usaha melalui bantuan peminjaman modal.
      </p>
      <p>
        <a class="btn btn-secondary" href="{{ url('/products') }}">View details &raquo;</a>
      </p>
    </div>
  </div>
  <hr class="featurette-divider">
</div>
<!-- Akhir Bagian Layanan -->


<!-- ============================================= -->
<!--                BAGIAN VISI & MISI             -->
<!-- ============================================= -->
<section class="container my-5">
    <div class="row align-items-center g-5">
        
        <div class="col-lg-6">
            <img src="https://placehold.co/600x400/0d6efd/white?text=Koperasi+TSM" 
                 alt="Karyawan Koperasi TSM" 
                 class="img-fluid rounded shadow-lg">
        </div>
        
        <div class="col-lg-6">
            <h2 class="display-5 fw-bold">Visi & Misi Koperasi TSM</h2>
            
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
<!-- Akhir Bagian Visi & Misi -->


<!-- ============================================= -->
<!--       (BARU) BAGIAN TESTIMONI ANGGOTA         -->
<!-- ============================================= -->
<section class="container-fluid bg-light my-5 py-5">
    <div class="container">
        <h2 class="display-5 fw-bold text-center mb-5">Apa Kata Mereka?</h2>
        <div class="row g-4">
            
            <!-- Testimoni 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <i class="bi bi-quote fs-1 text-primary"></i>
                        <p class="lead text-muted mt-3 fst-italic">"Bergabung dengan Koperasi TSM adalah keputusan terbaik. Pelayanannya profesional dan sangat membantu usaha saya."</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <img src="https://placehold.co/60x60/EBF4FF/0d6efd?text=A" class="rounded-circle" alt="Anggota 1">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-0">Akmal Zidan F</h6>
                                <span class="text-muted small">Pemilik Usaha</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <i class="bi bi-quote fs-1 text-primary"></i>
                        <p class="lead text-muted mt-3 fst-italic">"Simpanan di TSM aman dan jelas perhitungannya. Saya merasa tenang menabung di sini untuk masa depan."</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <img src="https://placehold.co/60x60/EBF4FF/0d6efd?text=B" class="rounded-circle" alt="Anggota 2">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-0">M Ridho Habibie</h6>
                                <span class="text-muted small">Anggota Sejak 2010</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <i class="bi bi-quote fs-1 text-primary"></i>
                        <p class="lead text-muted mt-3 fst-italic">"Proses pinjaman modalnya cepat dan tidak berbelit-belit. Sangat membantu saat usaha saya butuh dana cepat."</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <img src="https://placehold.co/60x60/EBF4FF/0d6efd?text=C" class="rounded-circle" alt="Anggota 3">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-0">Fithra Ahmad</h6>
                                <span class="text-muted small">Anggota UKM</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Akhir Bagian Testimoni -->


<!-- ============================================= -->
<!--        (BARU) BAGIAN BERITA TERBARU           -->
<!-- ============================================= -->
<section class="container my-5 py-5">
    <div class="container">
        <h2 class="display-5 fw-bold text-center mb-5">Berita & Kegiatan Terbaru</h2>
        <div class="row g-4">
            
            <!-- Berita 1 (RAT) -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://placehold.co/600x400/ced4da/white?text=RAT+2024" class="card-img-top" alt="RAT 2024">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Koperasi TSM Sukses Menyelenggarakan RAT Tahun 2024</h5>
                        <p class="card-text text-muted small">27 Maret 2025</p>
                        <p class="card-text">Sebagai bentuk transparansi, Koperasi TSM telah menggelar Rapat Anggota Tahunan di Surabaya...</p>
                        <a href="#" class="btn btn-outline-primary stretched-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 (Kantor Baru) -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://placehold.co/600x400/ced4da/white?text=Kantor+Baru" class="card-img-top" alt="Kantor Baru">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Koperasi TSM Resmi Menempati Kantor Baru</h5>
                        <p class="card-text text-muted small">Tahun 2020</p>
                        <p class="card-text">Untuk meningkatkan pelayanan, kami pindah ke kantor baru yang lebih representatif dan nyaman bagi anggota...</p>
                        <a href="#" class="btn btn-outline-primary stretched-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 3 (Pendidikan) -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://placehold.co/600x400/ced4da/white?text=Pendidikan" class="card-img-top" alt="Pendidikan Anggota">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Program Pendidikan Perkoperasian untuk Anggota</h5>
                        <p class="card-text text-muted small">Berkelanjutan</p>
                        <p class="card-text">Sesuai prinsip koperasi, kami rutin melaksanakan pendidikan untuk meningkatkan kemampuan anggota...</p>
                        <a href="#" class="btn btn-outline-primary stretched-link">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center mt-5">
            <a href="{{ url('/berita') }}" class="btn btn-primary btn-lg">Lihat Semua Berita</a>
        </div>
    </div>
</section>
<!-- Akhir Bagian Berita -->


<!-- ============================================= -->
<!--          (BARU) BAGIAN CALL TO ACTION         -->
<!-- ============================================= -->
<section class="container-fluid bg-primary my-5 py-5">
    <div class="container text-center text-white">
        <h2 class="display-5 fw-bold mb-3">Tertarik untuk Bergabung?</h2>
        <p class="lead mb-4">
            Jadilah bagian dari Koperasi TSM dan nikmati berbagai manfaat untuk kesejahteraan dan pengembangan usaha Anda.
        </p>
        {{-- Ganti '#' dengan link ke halaman pendaftaran Anda --}}
        <a href="#" class="btn btn-light btn-lg fw-bold px-5 py-3">Segera Hubungi Admin Disini</a>
    </div>
</section>
<!-- Akhir Bagian CTA -->


@endsection