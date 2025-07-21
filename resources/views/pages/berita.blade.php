@extends('layouts.app')

@section('title', 'Berita Desa Konoha')

@section('content')

{{-- Header Halaman --}}
<header class="bg-light pt-5 pb-4">
    <div class="container px-4 text-center">
        <h2 class="fw-bolder text-dark">Berita & Kegiatan Desa</h2>
        <p class="lead text-muted mb-0">Ikuti semua perkembangan dan acara terbaru dari Desa Konoha.</p>
        <img src="{{ asset('build/assets/img/news.png') }}" {{-- Ganti dengan nama file gambar Anda --}}
             class="img-fluid mt-4 mx-auto d-block"
             alt="Ilustrasi Berita"
             style="width: 700px; border-radius: 0; object-fit: cover;">
    </div>
</header>

<section class="py-5" id="berita">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-10">
                <h3 class="text-center mb-4">Berita Terbaru</h3>
                <p class="lead text-center">Ikuti perkembangan terbaru dan kejadian menarik di Desa Konoha. Kami akan terus memperbarui berita tentang pembangunan, acara desa, dan capaian-capaian penting.</p>

                <div class="row gx-5 mt-5">
                    {{-- Contoh Berita 1 --}}
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('build/assets/img/news.png') }}" alt="Gambar Berita 1" />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Pembangunan</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Judul Berita Pertama</h5></a>
                                <p class="card-text mb-0">Ringkasan singkat dari berita. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed do eiusmod tempor...</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="small">
                                        <div class="fw-bold">Admin Desa</div>
                                        <div class="text-muted">Juli 19, 2025</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Contoh Berita 2 --}}
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('build/assets/img/news.png') }}" alt="Gambar Berita 2" />
                            <div class="card-body p-4">
                                <div class="badge bg-success bg-gradient rounded-pill mb-2">Kegiatan</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Judul Berita Kedua</h5></a>
                                <p class="card-text mb-0">Ringkasan singkat dari berita. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo...</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="small">
                                        <div class="fw-bold">Admin Desa</div>
                                        <div class="text-muted">Juli 18, 2025</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Contoh Berita 3 --}}
                    <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('build/assets/img/news.png') }}" alt="Gambar Berita 3" />
                            <div class="card-body p-4">
                                <div class="badge bg-warning bg-gradient rounded-pill mb-2">Pengumuman</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Judul Berita Ketiga</h5></a>
                                <p class="card-text mb-0">Ringkasan singkat dari berita. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="small">
                                        <div class="fw-bold">Admin Desa</div>
                                        <div class="text-muted">Juli 17, 2025</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Contoh Berita 4 --}}
                     <div class="col-lg-6 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="{{ asset('build/assets/img/news.png') }}" alt="Gambar Berita 4" />
                            <div class="card-body p-4">
                                <div class="badge bg-info bg-gradient rounded-pill mb-2">UMKM</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Judul Berita Keempat</h5></a>
                                <p class="card-text mb-0">Ringkasan singkat dari berita. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="small">
                                        <div class="fw-bold">Admin Desa</div>
                                        <div class="text-muted">Juli 16, 2025</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- {{-- Pagination untuk navigasi halaman --}}
                <nav aria-label="Navigasi halaman berita">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                    </ul>
                </nav> -->
            </div>
        </div>
    </div>
</section>

@endsection
