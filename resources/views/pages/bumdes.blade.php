@extends('layouts.app')

@section('title', 'BUMDes Desa Konoha')

{{-- Pastikan Anda sudah menambahkan link CSS Bootstrap Icons di layout utama (app.blade.php) --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}

@section('content')

{{-- Header Halaman --}}
<header class="bg-light pt-5 pb-4">
    <div class="container px-4 text-center">
        <h2 class="fw-bolder text-dark">Badan Usaha Milik Desa (BUMDes)</h2>
        <p class="lead text-muted mb-0">Menggerakkan Ekonomi, Membangun Kesejahteraan Desa.</p>
        <img src="{{ asset('build/assets/img/bumdes.png') }}"
             class="img-fluid mt-4 mx-auto d-block"
             alt="Ilustrasi BUMDes"
             style="width: 700px; border-radius: 0; object-fit: cover;">
    </div>
</header>

<section id="bumdes" class="py-5">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-10 text-center">
                <h3 class="mb-4">Tentang BUMDes Konoha Sejahtera</h3>
                <p class="lead">BUMDes kami didirikan untuk mengelola potensi ekonomi desa dan meningkatkan kesejahteraan masyarakat. Kami memiliki berbagai unit usaha, mulai dari pengelolaan pasar desa hingga unit simpan pinjam, yang semuanya bertujuan untuk kemajuan bersama.</p>
            </div>
        </div>

        {{-- Bagian Fitur BUMDes dengan Ikon --}}
        <div class="row gx-5 mt-5">
            <div class="col-lg-4 mb-5">
                <div class="text-center">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-shop"></i></div>
                    <h4 class="fw-bolder">Unit Usaha Unggulan</h4>
                    <p class="text-muted">Jelajahi berbagai unit usaha kami yang menjadi motor penggerak ekonomi desa, dari pariwisata hingga produk lokal.</p>
                    <a class="text-decoration-none" href="#!">
                        Lihat Detail
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="text-center">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-file-earmark-text"></i></div>
                    <h4 class="fw-bolder">Laporan Kinerja</h4>
                    <p class="text-muted">Akses laporan kinerja dan keuangan BUMDes sebagai bentuk transparansi kami kepada seluruh warga desa.</p>
                    <a class="text-decoration-none" href="#!">
                        Unduh Laporan
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="text-center">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people-fill"></i></div>
                    <h4 class="fw-bolder">Kerja Sama & Kemitraan</h4>
                    <p class="text-muted">Kami terbuka untuk menjalin kemitraan strategis dengan berbagai pihak untuk memajukan usaha dan desa.</p>
                    <a class="text-decoration-none" href="#!">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>

         <div class="row gx-4 justify-content-center mt-4">
            <div class="col-lg-8 text-center">
                 <p class="fs-5">Info lebih lanjut dapat menghubungi pengelola BUMDes melalui kontak yang tersedia.</p>
                 {{-- Tombol Kontak WhatsApp --}}
                 <a class="btn btn-lg btn-success" href="https://wa.me/6287654333" target="_blank">
                    <i class="bi bi-whatsapp me-2"></i>Kontak Pengelola
                 </a>
            </div>
         </div>
    </div>
</section>

@endsection

{{-- Tambahkan CSS ini untuk styling ikon --}}
@push('styles')
<style>
    .feature {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 4rem;
        width: 4rem;
        font-size: 2rem;
    }
</style>
@endpush
