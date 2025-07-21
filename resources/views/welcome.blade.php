{{-- File: resources/views/index.blade.php --}}

@extends('layouts.app')

@section('title', 'Selamat Datang di Desa Konoha')

@section('content')

{{-- 1. Bagian Hero Image (Gambar Besar di Bawah Navbar) --}}
<header class="hero-section">
    <div class="hero-image-container position-relative">
        {{-- Gambar Latar Belakang --}}
        <img src="{{ asset('build/assets/img/2.jpeg') }}" class="img-fluid w-100" alt="Pemandangan Desa Konoha" style="max-height: 500px;">

        {{-- Teks di atas gambar --}}
        <div class="hero-text-overlay position-absolute bottom-0 start-0 p-4 p-md-5 text-white">
            <h1 class="display-4 fw-bolder">Selamat Datang di Desa Konoha</h1>
            <p class="lead d-none d-md-block">Desa yang asri, berbudaya, dan sejahtera. Jelajahi situs resmi kami untuk informasi terbaru.</p>
        </div>
    </div>
</header>

{{-- 2. Bagian "Tentang Kami" atau Profil Singkat --}}
<section class="py-5" id="profildesa">
    <div class="container px-4">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bolder">Mengenal Desa Konoha</h2>
                <p class="lead fw-normal text-muted mb-4">Desa Konoha, sebuah permata tersembunyi yang terletak di kaki pegunungan hijau yang subur, menawarkan perpaduan harmonis antara keindahan alam dan kekayaan budaya lokal. Dengan udara yang sejuk dan pemandangan yang memukau, desa ini menjadi tempat yang ideal untuk hidup dan berkembang.</p>
                <a class="btn btn-primary btn-lg" href="profil-desa">Lihat Profil Lengkap</a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('build/assets/img/1.jpeg') }}" alt="Foto Desa Konoha" />
            </div>
        </div>
    </div>
</section>
{{-- 3. BAGIAN BARU: Struktur Organisasi dengan Carousel --}}
<section class="py-5 bg-light" id="struktur-organisasi">
    <div class="container px-4">
        <h2 class="fw-bolder text-center mb-5">Struktur Organisasi & Aparatur Desa</h2>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-7">
                {{-- Bootstrap Carousel --}}
                <div id="aparaturCarousel" class="carousel slide shadow-sm" data-bs-ride="carousel">
                    {{-- Indicators (titik di bawah) --}}
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#aparaturCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#aparaturCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#aparaturCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    {{-- Konten Carousel --}}
                    <div class="carousel-inner rounded">
                        {{-- Item 1 --}}
<div class="carousel-item active">
    <img src="{{ asset('build/assets/img/lead1.png') }}" class="d-block w-100" alt="Foto Kepala Desa">
    {{-- TAMBAHKAN KELAS 'caption-background' DI SINI --}}
    <div class="carousel-caption d-none d-md-block caption-background">
        <h5 class="text-shadow">Nama Kepala Desa</h5>
        <p class="text-shadow">Kepala Desa Konoha</p>
    </div>
</div>
{{-- Item 2 --}}
<div class="carousel-item">
    <img src="{{ asset('build/assets/img/lead2.png') }}" class="d-block w-100" alt="Foto Sekretaris Desa">
     {{-- TAMBAHKAN KELAS 'caption-background' DI SINI --}}
    <div class="carousel-caption d-none d-md-block caption-background">
        <h5 class="text-shadow">Nama Sekretaris Desa</h5>
        <p class="text-shadow">Sekretaris Desa</p>
    </div>
</div>
{{-- Item 3 --}}
<div class="carousel-item">
    <img src="{{ asset('build/assets/img/lead3.png') }}" class="d-block w-100" alt="Foto Bendahara Desa">
     {{-- TAMBAHKAN KELAS 'caption-background' DI SINI --}}
    <div class="carousel-caption d-none d-md-block caption-background">
        <h5 class="text-shadow">Nama Bendahara Desa</h5>
        <p class="text-shadow">Bendahara Desa</p>
    </div>
</div>

                    {{-- Tombol Panah Kiri & Kanan --}}
                    <button class="carousel-control-prev" type="button" data-bs-target="#aparaturCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#aparaturCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- 3. Bagian Berita Terbaru (Preview) --}}
<section class="py-5 bg-light" id="berita">
    <div class="container px-4">
        <h2 class="fw-bolder text-center mb-5">Berita & Kegiatan Terbaru</h2>
        <div class="row gx-5">
            {{-- Contoh Berita 1 --}}
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('build/assets/img/news1.png') }}" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Pembangunan</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Judul Berita Pertama</h5></a>
                        <p class="card-text mb-0">Ringkasan singkat dari berita. Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>
                </div>
            </div>
             {{-- Contoh Berita 2 --}}
             <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('build/assets/img/news2.png') }}" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-success bg-gradient rounded-pill mb-2">Kegiatan</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Judul Berita Kedua</h5></a>
                        <p class="card-text mb-0">Ringkasan singkat dari berita. Ut enim ad minim veniam, quis nostrud exercitation ullamco...</p>
                    </div>
                </div>
            </div>
             {{-- Contoh Berita 3 --}}
             <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{ asset('build/assets/img/news4.png') }}" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-warning bg-gradient rounded-pill mb-2">Pengumuman</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Judul Berita Ketiga</h5></a>
                        <p class="card-text mb-0">Ringkasan singkat dari berita. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-primary btn-lg" href="berita">Lihat Semua Berita</a>
        </div>
    </div>
</section>

@endsection

{{-- CSS Tambahan untuk Hero Image --}}
@push('styles')
<style>
    /* Memberi jarak dari navbar fixed-top */
   /* main {
        margin-top: 56px;
    }

    .hero-section {
        margin-top: -56px;
    }*/

    .hero-image-container::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 50%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
    }
    .hero-text-overlay {
        z-index: 1;
    }
    .caption-background {
        background-color: rgba(0, 0, 0, 0.3); /* Overlay hitam 30% */
        padding: 1rem; /* Memberi sedikit ruang di dalam kotak */
        border-radius: .5rem; /* Membuat sudut sedikit tumpul */
        bottom: 1.25rem; /* Menyesuaikan posisi default dari Bootstrap */
    }
</style>
@endpush
