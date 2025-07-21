@extends('layouts.app')

@section('title', 'Informasi Publik Desa Konoha')

@section('content')

{{-- Header Halaman --}}
<header class="bg-light pt-5 pb-4">
    <div class="container px-4 text-center">
        <h2 class="fw-bolder text-dark">Pusat Informasi Publik</h2>
        <p class="lead text-muted mb-0">Transparansi dan akuntabilitas adalah prioritas kami untuk membangun desa.</p>

        {{-- Gambar Ilustrasi --}}
        <img src="{{ asset('build/assets/img/publicinfo.png') }}" {{-- Ganti dengan nama file gambar Anda --}}
             class="img-fluid mt-4 mx-auto d-block"
             alt="Ilustrasi Informasi Publik"
             style="width: 700px; border-radius: 0; object-fit: cover;">
    </div>
</header>

<section id="informasipublik" class="py-5">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h3 class="text-center mb-4">Dokumen dan Laporan Desa</h3>
                <p class="lead text-center">Bagian ini menyediakan akses mudah ke berbagai informasi penting terkait pemerintahan dan pelayanan publik Desa Konoha. Silakan unduh dokumen yang Anda perlukan melalui tautan di bawah ini.</p>

                {{-- Daftar Dokumen (Menggunakan List Group Bootstrap) --}}
                <div class="list-group list-group-flush shadow-sm mt-5">
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                        Laporan Keuangan Desa
                        <span class="badge bg-primary rounded-pill">Unduh</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                        Peraturan Desa
                        <span class="badge bg-primary rounded-pill">Unduh</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                        Agenda Kegiatan Desa
                        <span class="badge bg-primary rounded-pill">Unduh</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                        Laporan Transparansi Dana Desa
                        <span class="badge bg-primary rounded-pill">Unduh</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
