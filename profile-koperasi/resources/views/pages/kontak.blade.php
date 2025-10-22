@extends('layouts.app')

@section('content')

<section class="container my-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4 fw-bold">Hubungi Kami</h1>
            <p class="lead text-muted">Kami siap membantu Anda. Silakan isi formulir di bawah atau hubungi kami langsung.</p>
        </div>
    </div>
</section>

<section class="container mb-5">
    <div class="row g-5">

        <div class="col-lg-7">
            <h3 class="fw-bold mb-4">Kirim Pesan</h3>
            <form action="#" method="POST">
                @csrf <div class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="contact-name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="contact-name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="contact-email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="contact-email" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="contact-subject" class="form-label">Subjek</label>
                    <select class="form-select" id="contact-subject">
                        <option selected>Pilih subjek...</option>
                        <option value="Pendaftaran Anggota">Pendaftaran Anggota Baru</option>
                        <option value="Informasi Produk">Informasi Produk/Layanan</option>
                        <option value="Keluhan">Keluhan atau Masukan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="contact-message" class="form-label">Pesan Anda</label>
                    <textarea class="form-control" id="contact-message" rows="6" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">
                    Kirim Pesan <i class="bi bi-send"></i>
                </button>
            </form>
        </div>

        <div class="col-lg-5">
            <h3 class="fw-bold mb-4">Informasi Kontak</h3>
            
            <div class="contact-info-box p-4 rounded bg-light shadow-sm">
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start mb-3">
                        <i class="bi bi-geo-alt-fill fs-4 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold">Alamat</h5>
                            <p class="mb-0">Jl. Koperasi No. 123, Kota Anda, Provinsi Anda, 12345</p>
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
                            <p class="mb-0">cskopbumi@gmail.com</p>
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

            <div class="mt-4">
                <h3 class="fw-bold mb-3">Lokasi Kami</h3>
                <div class="ratio ratio-16x9 rounded shadow">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.351290353385!2d112.7543163153403!3d-7.314227894719462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6a304b6c3d%3A0x1d476a3900912251!2sUniversitas%20Islam%20Negeri%20Sunan%20Ampel%20Surabaya!5e0!3m2!1sen!2sid!4v1679471151603!5m2!1sen!2sid" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection