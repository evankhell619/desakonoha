@extends('layouts.app')

@section('title', 'Peta Desa Konoha')

@section('content')

{{-- Header Halaman --}}
<header class="bg-light pt-5 pb-4">
    <div class="container px-4 text-center">
        <h2 class="fw-bolder text-dark">Peta Wilayah Desa</h2>
        <p class="lead text-muted mb-0">Jelajahi setiap sudut Desa Konoha secara virtual.</p>
<img src="{{ asset('build/assets/img/map.png') }}"
             class="img-fluid mt-4 mx-auto d-block shadow-sm rounded"
             alt="Ilustrasi Peta Desa"
             style="width: 700px; border-radius: 0; object-fit: cover;">    </div>
</header>

{{-- Peta Section --}}
<section class="py-5" id="petadesa">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-10"> {{-- Kolom dibuat lebih lebar agar peta terlihat lebih baik --}}
                <h3 class="text-center mb-4">Lokasi Interaktif Desa Konoha</h3>
                <p class="lead text-center">Temukan lokasi strategis dan batas wilayah Desa Konoha melalui peta interaktif kami. Peta ini juga akan menampilkan fasilitas umum, area pertanian, dan potensi wisata desa.</p>

                {{-- Container untuk Peta agar Responsif --}}
                <div class="map-responsive shadow-sm rounded overflow-hidden mt-4">
                    {{-- GANTI URL DI BAWAH DENGAN URL EMBED GOOGLE MAPS DESA ANDA --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.43834214277!2d107.6180295!3d-6.9073795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c5e824771%3A0x2475a6ade2de9fa!2sGedung%20Sate!5e0!3m2!1sid!2sid!4v1673238323823!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <p class="mt-3 text-center text-muted">
                    <em>*(Google Maps untuk lokasi Desa Konoha)</em>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
