@extends('layouts.app')

@push('styles')
    {{-- CDN untuk Bootstrap Icons (dipakai di halaman ini) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')

<!-- ============================================= -->
<!--                 BAGIAN HEADER                 -->
<!-- ============================================= -->
<section class="container my-5 py-5 text-center">
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
            <h1 class="display-4 fw-bold">Produk & Layanan</h1>
            <p class="lead text-muted mt-3">
                Ini adalah etalase dari apa saja yang ditawarkan Koperasi TSM untuk melayani dan mensejahterakan anggota.
            </p>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!--             BAGIAN SIMPANAN ANGGOTA           -->
<!-- ============================================= -->
<section class="container mb-5 pb-5">
    <h2 class="display-5 fw-bold text-center mb-5">Simpanan Anggota</h2>
    <div class="row g-4">
        
        <!-- Card Simpanan Pokok -->
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100 border-0 text-center p-4">
                <i class="bi bi-journal-check display-3 text-primary mx-auto mb-3"></i>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Simpanan Pokok</h4>
                    <p class="card-text text-muted">Biaya wajib yang dibayarkan saat pertama kali menjadi anggota koperasi.</p>
                </div>
            </div>
        </div>

        <!-- Card Simpanan Wajib -->
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100 border-0 text-center p-4">
                <i class="bi bi-calendar-event display-3 text-primary mx-auto mb-3"></i>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Simpanan Wajib</h4>
                    <p class="card-text text-muted">Iuran rutin yang dibayarkan oleh anggota setiap bulan.</p>
                </div>
            </div>
        </div>

        <!-- Card Simpanan Sukarela -->
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100 border-0 text-center p-4">
                <i class="bi bi-piggy-bank-fill display-3 text-primary mx-auto mb-3"></i>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Simpanan Sukarela</h4>
                    <p class="card-text text-muted">Jenis simpanan lain yang bisa ditarik kapan saja, seringkali dengan imbal hasil menarik.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ============================================= -->
<!--             BAGIAN PINJAMAN ANGGOTA           -->
<!-- ============================================= -->
<section class="container-fluid bg-light py-5">
    <div class="container mb-5">
        <h2 class="display-5 fw-bold text-center mb-5">Pinjaman Anggota</h2>
        <div class="row g-4 justify-content-center">
            
            <!-- Card Pinjaman Modal Usaha -->
            <div class="col-md-6 col-lg-5 d-flex align-items-stretch">
                 <div class="card shadow-sm h-100 border-0 text-center p-4">
                    <i class="bi bi-graph-up-arrow display-3 text-primary mx-auto mb-3"></i>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Pinjaman Modal Usaha</h4>
                        <p class="card-text text-muted">Untuk membantu anggota mengembangkan bisnis dan usahanya.</p>
                    </div>
                </div>
            </div>

            <!-- Card Pinjaman Konsumtif -->
            <div class="col-md-6 col-lg-5 d-flex align-items-stretch">
                 <div class="card shadow-sm h-100 border-0 text-center p-4">
                    <i class="bi bi-cart-fill display-3 text-primary mx-auto mb-3"></i>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Pinjaman Konsumtif</h4>
                        <p class="card-text text-muted">Untuk kebutuhan pribadi seperti membeli kendaraan, perabot, atau biaya lainnya.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================= -->
<!--              BAGIAN LAYANAN LAINNYA           -->
<!-- ============================================= -->
<section class="container my-5 py-5">
     <h2 class="display-5 fw-bold text-center mb-5">Layanan Lainnya</h2>
     <div class="row g-4">
        
        <!-- Card Pelatihan -->
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card shadow-sm h-100 border-0 text-center p-4">
                <i class="bi bi-person-video3 display-3 text-primary mx-auto mb-3"></i>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Pelatihan & Pendampingan</h4>
                    <p class="card-text text-muted">Program untuk meningkatkan kemampuan dan keterampilan usaha anggota.</p>
                </div>
            </div>
        </div>

        <!-- Card Toko Koperasi -->
        <div class="col-lg-4 d-flex align-items-stretch">
             <div class="card shadow-sm h-100 border-0 text-center p-4">
                <i class="bi bi-shop display-3 text-primary mx-auto mb-3"></i>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Toko Koperasi</h4>
                    <p class="card-text text-muted">Menyediakan kebutuhan anggota melalui unit usaha ritel yang dimiliki koperasi.</p>
                </div>
            </div>
        </div>

        <!-- Card Kerja Sama -->
        <div class="col-lg-4 d-flex align-items-stretch">
             <div class="card shadow-sm h-100 border-0 text-center p-4">
                <i class="bi bi-building-fill-check display-3 text-primary mx-auto mb-3"></i>
                <div class="card-body">
                    <h4 class="card-title fw-bold">Kerja Sama</h4>
                    <p class="card-text text-muted">Kemitraan dengan pihak lain untuk memberikan manfaat tambahan kepada anggota.</p>
                </div>
            </div>
        </div>

     </div>
</section>

@endsection

