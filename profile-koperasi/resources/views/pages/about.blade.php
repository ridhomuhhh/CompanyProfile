@extends('layouts.app')

@push('styles')
    {{-- CDN untuk Bootstrap Icons (dipakai di bagian Prinsip & Tujuan) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@section('content')

<!-- ============================================= -->
<!--          BAGIAN "TENTANG" (VISI & MISI)       -->
<!-- ============================================= -->
<section class="container my-5 py-5">
    <div class="row align-items-center g-5">
        
        <div class="col-lg-6">
            <img src="https://placehold.co/600x400/0d6efd/white?text=Koperasi+TSM" 
                 alt="Karyawan Koperasi TSM" 
                 class="img-fluid rounded shadow-lg">
        </div>
        
        <div class="col-lg-6">
            <h2 class="display-5 fw-bold">Tentang Koperasi TSM</h2>
            
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
<!-- Akhir Bagian "Tentang" -->


<!-- ============================================= -->
<!--          BAGIAN TIMELINE SEJARAH          -->
<!-- ============================================= -->
<section class="container-fluid bg-light my-5 py-5">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Sejarah Koperasi TSM</h2>
        
        <div class="timeline-container">
            <div class="timeline-line"></div>
            <div class="timeline-nav">
                <div class="timeline-dot active" data-year="1998" data-target="#event-1998"></div>
                <div class="timeline-dot" data-year="2000" data-target="#event-2000"></div>
                <div class="timeline-dot" data-year="2008" data-target="#event-2008"></div>
                <div class="timeline-dot" data-year="2020" data-target="#event-2020"></div>
                <div class="timeline-dot" data-year="2022" data-target="#event-2022"></div>
            </div>
            <div class="timeline-content mt-5">
                <div class="timeline-item active" id="event-1998">
                    <h3 class="fw-bold text-primary">Berdiri Sejak Tahun 1998</h3>
                    <p class="lead text-muted">Koperasi "TSM" (Temprina Sejahtera Mandiri) mulai dirintis dan didirikan pada tahun 1998.</p>
                </div>
                <div class="timeline-item" id="event-2000">
                    <h3 class="fw-bold text-primary">Terdaftar Berbadan Hukum</h3>
                    <p class="lead text-muted">Pada tanggal 29 Mei 2000, Koperasi TSM secara resmi terdaftar dan diakui sebagai badan hukum.</p>
                </div>
                <div class="timeline-item" id="event-2008">
                    <h3 class="fw-bold text-primary">Perubahan Anggaran Dasar (AD/ART)</h3>
                    <p class="lead text-muted">Koperasi melakukan penyesuaian dan Perubahan Anggaran Dasar / Anggaran Rumah Tangga (AD/ART) untuk pertama kalinya.</p>
                </div>
                <div class="timeline-item" id="event-2020">
                    <h3 class="fw-bold text-primary">Menempati Kantor Baru</h3>
                    <p class="lead text-muted">Untuk meningkatkan pelayanan, Koperasi TSM pindah dan mulai beroperasi di kantor baru yang lebih representatif.</p>
                </div>
                <div class="timeline-item" id="event-2022">
                    <h3 class="fw-bold text-primary">Perubahan Anggaran Dasar (AD/ART) Kedua</h3>
                    <p class="lead text-muted">Koperasi kembali melakukan pembaruan pada Anggaran Dasar / Anggaran Rumah Tangga (AD/ART) untuk menyesuaikan dengan perkembangan.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Bagian Timeline -->


<!-- ============================================= -->
<!--           BAGIAN STRUKTUR ORGANISASI          -->
<!-- ============================================= -->
<section class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <h2 class="display-5 fw-bold mb-5">Struktur Organisasi</h2>
            <p class="lead text-muted mb-4">
                Koperasi Temprina Sejahtera Mandiri dikelola oleh tim yang profesional dan berdedikasi untuk melayani anggota.
            </p>
            
            <div class="row g-4 justify-content-center text-start">
                <!-- Pengurus Inti -->
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="card-title text-primary">Pengurus Koperasi</h4>
                            <ul class="list-unstyled lead mt-3">
                                <li class="mb-2"><strong>Pembina:</strong> Libert</li>
                                <li class="mb-2"><strong>Ketua:</strong> Turikan</li>
                                <li class="mb-2"><strong>Sekretaris:</strong> Dissy</li>
                                <li class="mb-2"><strong>Bendahara:</strong> Ayu</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Pengawas -->
                <div class="col-md-6">
                     <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="card-title text-primary">Pengawas</h4>
                            <ul class="list-unstyled lead mt-3">
                                <li class="mb-2">Riris</li>
                                <li class="mb-2">Agus</li>
                                <li class="mb-2">Edy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Bagian Struktur Organisasi -->


<!-- ============================================= -->
<!--           BAGIAN PRINSIP & TUJUAN             -->
<!-- ============================================= -->
<section class="container-fluid bg-light my-5 py-5">
    <div class="container">
        <div class="row g-5">
            
            <!-- Kolom Prinsip Koperasi -->
            <div class="col-lg-6">
                <h3 class="display-6 fw-bold mb-4">Prinsip Koperasi</h3>
                <ul class="list-unstyled lead">
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Keanggotaan bersifat sukarela dan terbuka.</li>
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Pengelolaan dilakukan secara Demokratis.</li>
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Pembagian Sisa Hasil Usaha (SHU) dilakuka secara adil.</li>
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Pemberian balas jasa yang terbatas terhadap modal.</li>
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Kemandirian.</li>
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Melaksanakan pendidikan perkoperasian.</li>
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Kerjasama antar koperasi.</li>
                </ul>
            </div>

            <!-- Kolom Tujuan Koperasi -->
            <div class="col-lg-6">
                <h3 class="display-6 fw-bold mb-4">Tujuan Koperasi</h3>
                <ul class="list-unstyled lead">
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Meningkatkan kesejahteraan anggota.</li>
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Melayani kebutuhan anggota.</li>
                    <li class="d-flex mb-3"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>Memberikan bantuan peminjaman modal.</li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!-- Akhir Bagian Prinsip & Tujuan -->

@endsection

