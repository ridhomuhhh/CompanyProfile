<style>
  #mobile-menu a {
    text-decoration: none;
    color: white
  }
</style>

<header class="relative bg-[#0066AF]">

  {{-- Top Content --}}
  <div class="container mx-auto flex justify-between p-4">
    <a href="{{ url('/') }}" class="text-white text-2xl font-bold">
      MyWebsite
    </a>
    <div class="hidden md:flex space-x-4">
      <div class="flex justify-content-end">
        <div class="shrink-0 btn-square my-auto bg-orange-300">
          <i class="fa fa-phone-alt text-white p-3"></i>
        </div>
        <div class="ms-2 text-white">
          <h6 class="mb-0">Call Us</h6>
          <span>+012 345 6789</span>
        </div>
      </div>
      <div class="flex justify-content-end">
        <div class="shrink-0 btn-square my-auto bg-orange-300">
          <i class="fa fa-envelope-open text-white p-3"></i>
        </div>
        <div class="ms-2 text-white">
          <h6 class="mb-0">Mail Us</h6>
          <span>info@domain.com</span>
        </div>
      </div>
      <div class="flex justify-content-end">
        <div class="shrink-0 btn-square my-auto bg-orange-300">
          <i class="fa fa-map-marker-alt text-white p-3"></i>
        </div>
        <div class="ms-2 text-white">
          <h6 class="mb-0">Address</h6>
          <span>123 Street, NY, USA</span>
        </div>
      </div>
    </div>
  </div>
  {{-- End Top Content --}}

  {{-- Navbar --}}
  <nav class="transition-all bg-orange-300 duration-500 ease-in-out mx-auto w-7/8 z-50" id="navbar">
    <div class="flex md:hidden justify-start my-auto">
      <button id="menu-button" class="p-4 focus:outline-none">
        <i class="fa fa-bars text-white text-2xl"></i>
      </button>
    </div>

    <ul class="hidden md:flex justify-between p-4 m-auto md:space-x-2">
      <li>
        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
          Home
        </a>
      </li>
      <li>
        <a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}" href="{{ url('/berita') }}">
          Berita
        </a>
      </li>
      <li>
        <a class="nav-link {{ request()->is('tentang-kami') ? 'active' : '' }}" href="{{ url('/tentang-kami') }}">
          Tentang Kami
        </a>
      </li>
      <li>
        <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="{{ url('/kontak') }}">
          Kontak
        </a>
      </li>
    </ul>

    {{-- Mobile --}}
    <ul id="mobile-menu"
      class="max-h-0 overflow-hidden opacity-0 transition-all duration-500 ease-in-out m-auto md:hidden decoration-0">
      <li><a href="{{ url('/') }}" class="block p-3">Home</a></li>
      <li><a href="{{ url('/berita') }}" class="block p-3">Berita</a></li>
      <li><a href="{{ url('/tentang-kami') }}" class="block p-3">Tentang Kami</a></li>
      <li><a href="{{ url('/kontak') }}" class="block p-3">Kontak</a></li>
    </ul>
  </nav>
  {{-- End Navbar --}}
</header>

<script>
  const button = document.getElementById('menu-button');
  const menu = document.getElementById('mobile-menu');

  button.addEventListener('click', () => {
    if (menu.classList.contains('max-h-0')) {
      // tampilkan menu
      menu.classList.remove('max-h-0', 'opacity-0');
      menu.classList.add('max-h-96', 'opacity-100');
    } else {
      // sembunyikan menu
      menu.classList.add('max-h-0', 'opacity-0');
      menu.classList.remove('max-h-96', 'opacity-100');
    }
  });

  document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navbar");
    const initialOffsetTop = navbar.offsetTop;

    window.addEventListener("scroll", () => {
      if (window.scrollY >= initialOffsetTop) {
        navbar.classList.add(
          "fixed", "w-full", "top-0", "left-0", "right-0",
        );
        navbar.classList.remove("w-3/4");
      } else {
        navbar.classList.remove(
          "fixed", "w-full", "top-0", "left-0", "right-0",
        );
        navbar.classList.add("w-3/4");
      }
    });
  });
</script>
