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
      @foreach ($allBerita as $item)
        <div class="col-md-6 col-lg-4">
          <div class="card shadow-sm h-100">
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
    </div>
  </section>

  {{-- <section class="container mb-5">
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
  </section> --}}
@endsection
