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
    {{-- Ini adalah baris utama yang akan menampung 2 kolom --}}
    <div class="row g-5">

        <!-- ============================================= -->
        <!--           KOLOM 1: INFORMASI KONTAK           -->
        <!-- ============================================= -->
        <div class="col-lg-5">
            <h3 class="fw-bold mb-4">Informasi Kontak</h3>
            
            <div class="contact-info-box p-4 rounded bg-light shadow-sm h-100">
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start mb-3">
                        <i class="bi bi-geo-alt-fill fs-4 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold">Alamat</h5>
                            <p class="mb-0">Jl. Karah Agung No.45, Karah, Kec. Jambangan, Surabaya, Jawa Timur 60232</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <i class="bi bi-telephone-fill fs-4 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold">Telepon</h5>
                            <p class="mb-0">(021) 123-4567</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <i class="bi bi-envelope-fill fs-4 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold">Email</h5>
                            <p class="mb-0">dummy@gmail.com</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="bi bi-clock-fill fs-4 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold">Jam Operasional</h5>
                            <p class="mb-0">Senin - Jumat: 08:00 - 16:00 WIB</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- ============================================= -->
        <!--              KOLOM 2: LOKASI KAMI             -->
        <!-- ============================================= -->
        <div class="col-lg-7">
            <h3 class="fw-bold mb-4">Lokasi Kami</h3>
            
            {{-- Menambahkan class h-100 agar tinggi peta sama dengan box info --}}
            <div class="ratio ratio-16x9 rounded shadow h-100">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3998.5721700988606!2d112.71498477504745!3d-7.314546992693429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb7dc60d834b%3A0x2e8dc10cbef60c16!2sPT.%20Temprina%20Media%20Grafika%20(Packaging)!5e1!3m2!1sen!2sid!4v1761815987713!5m2!1sen!2sid" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

    </div>
</section>
@endsection