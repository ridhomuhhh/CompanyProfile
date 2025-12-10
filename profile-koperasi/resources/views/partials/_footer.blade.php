{{-- CDN untuk Bootstrap Icons (jika belum ada di layout utama) --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<footer class="site-footer">

    <div class="footer-logo-top shadow">
        <img src="{{ asset('images/logo-tsm.png') }}" alt="Logo Koperasi TSM">
    </div>

    <div class="container">
        <div class="row">

            <!-- Kolom 1 -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title">Koperasi TSM</h5>
                <p class="text-muted" style="color: #ced4da; font-size: 0.9rem;">Koperasi Temprina Sejahtera Mandiri</p>
                
                <h5 class="footer-title mt-3">Jam Kerja</h5>
                <ul class="footer-links">
                    <li>Senin - Jumat: 08:00 - 16:00</li>
                    <li>Sabtu - Minggu: Tutup</li>
                </ul>
            </div>

            <!-- Kolom 2 (Hanya Sosial Media) -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 text-center">
                <h5 class="footer-title">Sosial Media</h5>
                <div class="social-icons mb-3">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                    <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <!-- Kolom 3 -->
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <h5 class="footer-title">Official Info</h5>
                <div class="footer-info-item">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Jl. Karah Agung No.45, Karah, Kec. Jambangan, Surabaya</span>
                </div>
                <div class="footer-info-item">
                    <i class="bi bi-telephone-fill"></i>
                    <span>(+62) 8123-4567</span>
                </div>
                <div class="footer-info-item">
                    <i class="bi bi-envelope-fill"></i>
                    <span>dummy@gmail.com</span>
                </div>
            </div>

        </div>

        <div class="row footer-divider">
            <div class="col-12 footer-bottom-bar d-flex justify-content-center align-items-center flex-column flex-md-row">
                <p class="mb-0">&copy; {{ date('Y') }} Koperasi Tunas Sejahtera Mandiri. All rights reserved.</p>

            </div>
        </div>

    </div>
</footer>