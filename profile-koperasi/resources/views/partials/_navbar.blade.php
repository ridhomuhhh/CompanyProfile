<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid">
        
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- Pastikan logo-tsm.png ada di folder 'public/images/' --}}
            <img src="{{ asset('images/logo-tsm.png') }}" alt="Logo Koperasi" style="height: 50px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            
            {{-- Menggunakan 'mx-auto' untuk menengahkan grup link navigasi --}}
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" 
                       href="{{ url('/') }}">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('news*') ? 'active' : '' }}" 
                       href="{{ url('/berita') }}">
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" 
                       href="{{ url('/produk') }}">
                        Produk & Layanan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" 
                       href="{{ url('/tentang-kami') }}">
                        Tentang Kami
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" 
                       href="{{ url('/kontak') }}">
                        Kontak
                    </a>
                </li>
            </ul>
                
            <a class="btn btn-primary d-none d-lg-flex" href="{{ url('/kontak') }}" role="button"> 
                GABUNG SEKARANG &rarr;
            </a>

        </div>
    </div>
</nav>