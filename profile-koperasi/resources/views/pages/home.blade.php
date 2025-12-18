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

      @if (isset($galeri[0]))
        <div class="gallery-item-main">
          <div class="gallery-card">
            <img src="{{ asset('storage/' . $galeri[0]->media) }}" alt="{{ $galeri[0]->judul ?? 'Galeri Utama' }}"
              style="width: 100%; height: 100%; object-fit: cover;">

            <div class="gallery-overlay">
              <h5 class="fw-bold">{{ $galeri[0]->judul ?? 'Kegiatan Terbaru' }}</h5>
            </div>
          </div>
        </div>
      @endif

      @if (isset($galeri[1]))
        <div class="gallery-item">
          <div class="gallery-card">
            <img src="{{ asset('storage/' . $galeri[1]->media) }}" alt="{{ $galeri[1]->judul ?? 'Galeri' }}"
              style="width: 100%; height: 100%; object-fit: cover;">

            <div class="gallery-overlay">
              <h6 class="fw-bold">{{ $galeri[1]->judul ?? 'Kegiatan' }}</h6>
            </div>
          </div>
        </div>
      @endif

      @if (isset($galeri[2]))
        <div class="gallery-item">
          <div class="gallery-card">
            <img src="{{ asset('storage/' . $galeri[2]->media) }}" alt="{{ $galeri[2]->judul ?? 'Galeri' }}"
              style="width: 100%; height: 100%; object-fit: cover;">

            <div class="gallery-overlay">
              <h6 class="fw-bold">{{ $galeri[2]->judul ?? 'Kegiatan' }}</h6>
            </div>
          </div>
        </div>
      @endif

      @if (isset($galeri[3]))
        <div class="gallery-item-wide">
          <div class="gallery-card">
            <img src="{{ asset('storage/' . $galeri[3]->media) }}" alt="{{ $galeri[3]->judul ?? 'Galeri' }}"
              style="width: 100%; height: 100%; object-fit: cover;">

            <div class="gallery-overlay">
              <h5 class="fw-bold">{{ $galeri[3]->judul ?? 'Kegiatan Lainnya' }}</h5>
            </div>
          </div>
        </div>
      @endif

    </div>
  </section>
  <!-- Akhir Bagian Galeri -->


  <!-- ============================================= -->
  <!--       (BARU) BAGIAN TESTIMONI ANGGOTA         -->
  <!-- ============================================= -->
  <section class="container-fluid bg-light my-5 py-5">
    <div class="container">
      <h2 class="display-5 fw-bold text-center mb-5">Apa Kata Anggota Kami?</h2>
      <div class="row g-4 flex justify-content-center">
        @foreach ($testimonis as $item)
          <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body p-4">
                <i class="bi bi-quote fs-1 text-primary"></i>
                <p class="lead text-muted mt-3 fst-italic">{{ $item->isi }}</p>
                <hr>
                <div class="flex align-items-center">
                  <div class="ratio ratio-1x1">
                    <img src="{{ asset('storage/' . $item->foto) }}" class="object-fit-cover" alt="Anggota 1"
                      width="100">
                  </div>
                  <div class="ms-3">
                    <h6 class="fw-bold mb-0">{{ $item->nama }}</h6>
                    <span class="text-muted small">{{ $item->pekerjaan }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
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
        @foreach ($berita as $item)
          <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
              <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="Judul Berita 1">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-bold">{{ $item->judul_berita }}</h5>
                <p class="card-text text-muted small">{{ $item->tanggal->format('d M Y') }}</p>
                <p class="card-text d-inline-block text-truncate">{{ $item->isi_berita }}</p>
                <a href="{{ url("/berita/$item->slug") }}" class="btn btn-primary mt-auto align-self-start">Baca
                  Selengkapnya</a>
              </div>
            </div>
          </div>
        @endforeach
        <!-- Berita 1: RAT -->
      </div>
      <div class="text-center mt-5">
        <a href="{{ url('/berita') }}" class="btn btn-primary btn-lg">Lihat Semua Berita</a>
      </div>
    </div>
  </section>
@endsection
