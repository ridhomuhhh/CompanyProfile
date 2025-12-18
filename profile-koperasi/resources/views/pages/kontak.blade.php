@extends('layouts.app')

@section('content')
  <section class="container my-5">
    <div class="row">
      <div class="col text-center">
        <h1 class="display-4 fw-bold">Hubungi Kami</h1>
        <p class="lead text-muted">Kami siap membantu Anda.</p>
      </div>
    </div>
  </section>

  <section class="container mb-5 pb-5">
    <div class="row g-5">
      <div class="col-lg-5">
        <h3 class="fw-bold mb-4">Informasi Kontak</h3>

        <div class="contact-info-box p-4 rounded bg-light shadow-sm h-100">
          <ul class="list-unstyled">
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-geo-alt-fill fs-4 text-primary me-3"></i>
              <div>
                <h5 class="fw-bold">Alamat</h5>
                <p class="mb-0">{{ $kontaks->alamat }}</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-telephone-fill fs-4 text-primary me-3"></i>
              <div>
                <h5 class="fw-bold">Telepon</h5>
                <p class="mb-0">{{ $kontaks->telepon }}</p>
              </div>
            </li>
            <li class="d-flex align-items-start mb-3">
              <i class="bi bi-envelope-fill fs-4 text-primary me-3"></i>
              <div>
                <h5 class="fw-bold">Email</h5>
                <p class="mb-0">{{ $kontaks->email }}</p>
              </div>
            </li>
            <li class="d-flex align-items-start">
              <i class="bi bi-clock-fill fs-4 text-primary me-3"></i>
              <div>
                <h5 class="fw-bold">Jam Operasional</h5>
                <p class="mb-0">Senin - Jumat: {{ $kontaks->jam_operasional }} WIB</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-7">
        <h3 class="fw-bold mb-4">Lokasi Kami</h3>

        <div class="ratio ratio-16x9 rounded shadow h-100">
          <iframe src="{{ $kontaks->maps }}" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

    </div>
  </section>
@endsection
