@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')

<!-- ============================================= -->
<!--             HEADER GAMBAR (HERO)              -->
<!-- ============================================= -->
<div class="container-fluid p-0 mb-5">
    {{-- Mengambil gambar dari artikel. Jika url lengkap (placeholder) pakai langsung, jika path storage pakai asset() --}}
    @php
        $bgImage = Str::startsWith($article->image, 'http') ? $article->image : asset('storage/' . $article->image);
    @endphp

    <div style="background: url('{{ $bgImage }}') no-repeat center center; background-size: cover; height: 450px; position: relative;">
        <!-- Overlay Gelap -->
        <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.8));"></div>
        
        <div class="container h-100 d-flex align-items-end pb-5 position-relative">
            <div class="text-white col-lg-8">
                <span class="badge bg-primary mb-3 px-3 py-2">{{ $article->category }}</span>
                <h1 class="display-4 fw-bold">{{ $article->title }}</h1>
                <div class="d-flex align-items-center mt-3 text-light">
                    <span class="me-4"><i class="bi bi-calendar3 me-2"></i> {{ \Carbon\Carbon::parse($article->published_at)->format('d F Y') }}</span>
                    <span><i class="bi bi-person-fill me-2"></i> Admin TSM</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================= -->
<!--                KONTEN UTAMA                   -->
<!-- ============================================= -->
<section class="container mb-5 pb-5">
    <div class="row g-5">
        
        <!-- KOLOM KIRI: ISI BERITA -->
        <div class="col-lg-8">
            <article class="blog-post">
                {{-- Menampilkan isi konten (mendukung HTML tag) --}}
                <div class="content-body lh-lg text-secondary">
                    {!! $article->content !!}
                </div>
            </article>

            <!-- Tombol Kembali -->
            <div class="mt-5 pt-4 border-top">
                <a href="{{ route('news.index') }}" class="btn btn-outline-secondary px-4 rounded-pill">
                    <i class="bi bi-arrow-left me-2"></i> Kembali ke Berita
                </a>
            </div>
        </div>

        <!-- KOLOM KANAN: SIDEBAR -->
        <div class="col-lg-4">
            <div class="position-sticky" style="top: 2rem;">
                
                <!-- Widget: Berita Terbaru Lainnya -->
                <div class="card border-0 shadow-sm rounded-3 mb-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4 border-start border-4 border-primary ps-3">Berita Lainnya</h5>
                        <ul class="list-unstyled mb-0">
                            
                            @forelse($recent_news as $recent)
                                <li class="mb-4">
                                    <a href="{{ route('news.show', $recent->slug) }}" class="d-flex text-decoration-none text-dark group-link">
                                        {{-- Gambar Thumbnail --}}
                                        @php
                                            $thumbImage = Str::startsWith($recent->image, 'http') ? $recent->image : asset('storage/' . $recent->image);
                                        @endphp
                                        <img src="{{ $thumbImage }}" class="rounded-3 me-3 object-fit-cover" alt="Thumb" style="width: 80px; height: 80px;">
                                        
                                        <div>
                                            <h6 class="fw-bold mb-1" style="font-size: 0.95rem; line-height: 1.4;">{{ Str::limit($recent->title, 45) }}</h6>
                                            <small class="text-muted" style="font-size: 0.8rem;">
                                                <i class="bi bi-calendar-event me-1"></i> 
                                                {{ \Carbon\Carbon::parse($recent->published_at)->format('d M Y') }}
                                            </small>
                                        </div>
                                    </a>
                                </li>
                            @empty
                                <li class="text-muted small">Belum ada berita lain.</li>
                            @endforelse

                        </ul>
                    </div>
                </div>

                <!-- Widget: Kategori (Opsional / Statis dulu) -->
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3 border-start border-4 border-primary ps-3">Tentang Kami</h5>
                        <p class="text-muted small mb-3">
                            Koperasi TSM berkomitmen memberikan informasi transparan dan edukasi bermanfaat bagi seluruh anggota.
                        </p>
                        <a href="{{ url('/kontak') }}" class="btn btn-primary w-100 btn-sm rounded-pill">Hubungi Kami</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection