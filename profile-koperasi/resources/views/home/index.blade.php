<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Carousel Bootstrap di Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* Opsional: Memberi tinggi maksimal agar gambar tidak terlalu besar di layar besar */
        .carousel-item img {
            max-height: 600px;
            object-fit: cover; /* Memastikan gambar menutupi area tanpa distorsi */
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">WebsiteKu</a>
            </div>
        </nav>
    </header>

    <main>
        {{-- Pastikan variabel $slides dikirim dari Controller --}}
        @if(isset($slides) && count($slides) > 0)
            <div id="carouselExampleCaptions" class="carousel slide">
                {{-- Indicators (Tombol titik di bawah) --}}
                <div class="carousel-indicators">
                    @foreach ($slides as $index => $slide)
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>

                {{-- Konten Slide --}}
                <div class="carousel-inner">
                    @foreach ($slides as $slide)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            {{-- Gunakan helper asset() untuk mengambil gambar dari folder /public --}}
                            <img src="{{ asset($slide['image']) }}" class="d-block w-100" alt="{{ $slide['title'] }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $slide['title'] }}</h5>
                                <p>{{ $slide['caption'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Tombol Kontrol Kiri dan Kanan --}}
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        @else
            <div class="container text-center py-5">
                <p>Tidak ada data slide untuk ditampilkan.</p>
            </div>
        @endif
        
        <div class="container mt-5">
            <h1>Selamat Datang!</h1>
            <p class="lead">Ini adalah halaman contoh yang menampilkan carousel Bootstrap dinamis menggunakan Laravel.</p>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>