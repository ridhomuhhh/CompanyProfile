{{-- CDN untuk Bootstrap Icons (jika belum ada di layout utama) --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<footer class="site-footer">

    <div class="footer-logo-top shadow">
        <img src="{{ asset('images/logo-tsm.png') }}" alt="Logo Koperasi TSM">
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title">Koperasi TSM</h5>
                <p class="text-muted" style="color: #ced4da;">Koperasi Temprina Sejahtera Mandiri</p>
                
                <h5 class="footer-title mt-4">Jam Kerja</h5>
                <ul class="footer-links">
                    <li>Senin - Jumat: 08:00 - 16:00</li>
                    <li>Sabtu: 08:00 - 14:00</li>
                    <li>Minggu: Tutup</li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 text-center">
                <h5 class="footer-title">Sosial Media</h5>
                <div class="social-icons mb-4">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                    <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>

                <h5 class="footer-title mt-5">Navigasi</h5>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/products') }}">Produk & Layanan</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <h5 class="footer-title">Official Info</h5>
                <div class="footer-info-item">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Jl. Temprina No. 123, Surabaya, Jawa Timur, 60123</span>
                </div>
                <div class="footer-info-item">
                    <i class="bi bi-telephone-fill"></i>
                    <span>(031) 123-4567</span>
                </div>
                <div classs="footer-info-item">
                    <i class="bi bi-envelope-fill"></i>
                    <span>info@koperasitsm.com</span>
                </div>
            </div>

        </div>

        <div class="row footer-divider">
            <div class="col-12 footer-bottom-bar">
                <p>&copy; {{ date('Y') }} © Koperasi Tunas Sejahtera Mandiri. All rights reserved.</p>
            </div>
        </div>

    </div>
</footer>