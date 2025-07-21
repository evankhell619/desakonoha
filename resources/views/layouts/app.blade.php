<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Situs Resmi Desa Konoha" /> {{-- Deskripsi situs --}}
        <meta name="author" content="Tim Desa Konoha" /> {{-- Penulis situs --}}
        <title>@yield('title', 'Desa Konoha')</title> {{-- Judul halaman dinamis --}}
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" /> {{-- Favicon situs --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" /> {{-- CSS utama dari template --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="d-flex flex-column min-vh-100">

        @include('layouts.navbar')

        {{-- TAMBAHKAN KELAS DI SINI --}}
        <main class="flex-grow-1">
            @yield('content')
        </main>

        @include('layouts.footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('template/js/scripts.js')}}"></script>
    </body>
</html>
