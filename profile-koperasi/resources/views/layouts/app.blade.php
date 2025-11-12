<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Astro v5.13.2" />
    <title>Koperasi Tunas Sejahtera Mandiri</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <meta name="theme-color" content="#712cf9" />

</head>

<body>

    @include('partials._navbar')

    <main>
        @yield('content')

        @include('partials._footer')
    </main>

</body>

</html>
