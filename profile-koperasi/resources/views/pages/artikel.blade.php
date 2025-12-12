@extends('layouts.app')

@section('content')

<section class="container my-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4 fw-bold">Berita Terbaru</h1>
            <p class="lead text-muted">Informasi dan kegiatan terkini dari Koperasi TSM.</p>
        </div>
    </div>
</section>

<section class="container mb-5">
    <div class="row g-4">

        {{-- LOOPING DATA DARI CONTROLLER --}}
        @forelse($articles as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0">
                    {{-- Gambar Dinamis --}}
                    <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">

                    <div class="card-body d-flex flex-column p-4">
                        <div class="mb-2">
                            <span class="badge bg-primary">{{ $item->category }}</span>
                        </div>

                        <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                        
                        <p class="card-text text-muted small">
                            {{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}
                        </p>
                        
                        <p class="card-text">{{ Str::limit($item->excerpt, 80) }}</p>
                        
                        {{-- 
                            LINK DINAMIS (PERBAIKAN UTAMA)
                            Ini akan menghasilkan URL seperti: /berita/rat-2024
                        --}}
                        <a href="{{ route('news.show', $item->slug) }}" class="btn btn-primary mt-auto align-self-start">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">Belum ada berita.</p>
            </div>
        @endforelse
        
    </div>
</section>

<section class="container mb-5">
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
</section>

@endsection