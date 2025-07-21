@extends('layouts.app')

@section('title', 'Profil Desa Konoha')

@section('content')
{{-- Bagian Header Halaman dengan Gambar dan Judul --}}
{{-- pt-5 memberikan jarak dari navbar. bg-light memberikan latar belakang abu-abu muda. --}}
<header class="bg-light pt-5 pb-4">
    <div class="container px-4 text-center">

        <h2 class="fw-bolder text-dark">Profil Desa</h2>
        <p class="lead text-muted mb-2">Desa tentram dan aman.</p>
<img src="{{ asset('build/assets/img/1.jpeg') }}" alt="Gambar Header Desa" class="img-fluid mb-4" style="width: 100%; max-height: 350px; border-radius: 0; object-fit: cover;"> {{-- Atur border-radius menjadi 0 --}}
    </div>
</header>

{{-- Konten utama halaman Profil Desa --}}
{{-- py-5 memberikan padding atas dan bawah untuk konten ini. --}}
<div class="container py-5">
    <div class="row gx-4 justify-content-center">
        <div class="col-lg-10">
            <h3 class="text-center mb-4">Mengenal Lebih Dekat Desa Konoha</h3>
            <p class="lead">Desa Konoha, sebuah permata tersembunyi yang terletak di kaki pegunungan hijau yang subur, menawarkan perpaduan harmonis antara keindahan alam dan kekayaan budaya lokal. Dengan udara yang sejuk dan pemandangan yang memukau, desa ini menjadi tempat yang ideal untuk hidup dan berkembang.</p>

            <h4 class="mt-5 mb-3">Sejarah Singkat</h4>
            <p>Berdiri sejak tahun 19XX, Desa Konoha memiliki sejarah panjang yang diwarnai oleh semangat gotong royong dan kegigihan warganya. Nama "Konoha" sendiri diambil dari filosofi daun yang tumbuh dan berkembang, melambangkan pertumbuhan dan kemajuan desa yang berkelanjutan. Berbagai peristiwa penting telah membentuk karakter desa ini, menjadikannya seperti sekarang.</p>

            <h4 class="mt-5 mb-3">Visi dan Misi Desa</h4>
            <p><strong>Visi:</strong> Menjadikan Desa Konoha sebagai desa yang mandiri, sejahtera, berbudaya, dan lestari berbasis potensi lokal serta teknologi informasi.</p>
            <p><strong>Misi:</strong></p>
            <ul>
                <li>Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan.</li>
                <li>Mengembangkan potensi ekonomi desa melalui sektor pertanian, pariwisata, dan UMKM.</li>
                <li>Melestarikan adat istiadat dan budaya lokal sebagai identitas desa.</li>
                <li>Meningkatkan kualitas pelayanan publik yang transparan dan akuntabel.</li>
                <li>Membangun infrastruktur desa yang memadai dan ramah lingkungan.</li>
            </ul>

            <h4 class="mt-5 mb-3">Struktur Pemerintahan Desa</h4>
            <p>Pemerintahan Desa Konoha dipimpin oleh Kepala Desa yang dibantu oleh perangkat desa lainnya, termasuk Sekretaris Desa, Kepala Urusan, dan Kepala Seksi. Lembaga-lembaga desa seperti Badan Permusyawaratan Desa (BPD) dan Lembaga Pemberdayaan Masyarakat (LPM) juga aktif berperan dalam pembangunan dan pengambilan keputusan desa.</p>
            <div class="text-center mt-4">
                <img src="{{ asset('build/assets/img/profiledesa.jpg') }}" alt="Struktur Organisasi Desa Konoha" class="img-fluid rounded shadow-sm" >
                <p class="text-muted mt-2">Diagram Struktur Organisasi Pemerintahan Desa Konoha</p>
            </div>

            <h4 class="mt-5 mb-3">Potensi Desa</h4>
            <p>Desa Konoha diberkahi dengan berbagai potensi, antara lain:</p>
            <ul>
                <li><strong>Pertanian:</strong> Lahan subur untuk padi, sayuran, dan buah-buahan organik.</li>
                <li><strong>Pariwisata:</strong> Air terjun alami, hutan pinus, dan area trekking yang menarik.</li>
                <li><strong>Kerajinan Tangan:</strong> Produk anyaman bambu dan ukiran kayu khas lokal.</li>
                <li><strong>Kuliner:</strong> Makanan tradisional yang lezat dan unik.</li>
            </ul>
        </div>
    </div>
</div>
@endsection
