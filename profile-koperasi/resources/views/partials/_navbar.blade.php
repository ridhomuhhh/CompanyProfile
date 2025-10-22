<header>
    <div class="header-top bg-light border-bottom py-2">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                
                <div>
                    <strong>Koperasi Tunas Sejahtera Mandiri</strong>
                </div>

                <div class="d-flex align-items-center">
                    <a href="tel:08123456789" class="text-decoration-none text-dark me-4">
                        <i class="bi bi-telephone-fill text-primary"></i>
                        Kontak: 08123456789
                    </a>
                    
                    <a href="mailto:dummy@gmail.com" class="text-decoration-none text-dark me-4">
                        <i class="bi bi-envelope-fill text-primary"></i>
                        Email: dummy@gmail.com
                    </a>

                    <a href="#" class="text-secondary me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-secondary me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-secondary"><i class="bi bi-youtube"></i></a>
                </div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="#">
                <img src="..." alt="Logo Koperasi" style="height: 50px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
                    
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" 
                            href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}" 
                            href="{{ url('/berita') }}">
                            Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('tentang-kami') ? 'active' : '' }}" 
                            href="{{ url('/tentang-kami') }}">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" 
                            href="{{ url('/kontak') }}">
                            Kontak
                        </a>
                    </li>
                </ul>
                
                <a href="#" class="btn btn-primary">
                    PESAN SEKARANG <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </nav>
</header>