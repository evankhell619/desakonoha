<header class="bg-primary bg-gradient text-white py-5 app-header">
    <div class="header-image-container mb-4">
        <img src="{{ asset('build/assets/img/1.jpeg') }}" alt="Gambar Header Desa" class="img-fluid header-full-width-img">
    </div>

    <div class="container px-4 text-center">
        <h1 class="fw-bolder">Selamat Datang di Desa Konoha!</h1>
        <p class="lead">Temukan keindahan alam, budaya yang kaya, dan informasi terkini seputar desa kami.</p>
        <p class="lead">Kami berkomitmen untuk membangun desa yang maju, sejahtera, dan transparan.</p>
        <a class="btn btn-lg btn-light" href="#profildesa">Jelajahi Lebih Lanjut!</a>
    </div>
</header>

<style>
    /* CSS tambahan untuk membuat gambar full width */
    /* resources/css/app.css */

/* Pastikan body dan html tidak memiliki margin/padding bawaan yang mengganggu full height */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

/* Styling untuk header utama */
.app-header { /* Menggunakan class yang ditambahkan ke <header> */
    /* Atur tinggi header menjadi proporsi tertentu dari viewport height */
    min-height: 100vh; /* Contoh: 80% dari tinggi viewport. Sesuaikan sesuai kebutuhan. */
    /* Atau, jika ingin benar-benar full height, gunakan height: 100vh; */

    display: flex; /* Gunakan Flexbox untuk mengatur konten */
    flex-direction: column; /* Susun item secara vertikal */
    justify-content: center; /* Pusatkan konten vertikal di dalam header */
    align-items: center; /* Pusatkan konten horizontal di dalam header */
    padding-top: 0; /* Hapus padding-top dan padding-bottom bawaan Bootstrap dari py-5 */
    padding-bottom: 0; /* karena tinggi dikontrol oleh min-height dan justify-content */
    position: relative; /* Penting untuk posisi latar belakang atau overlay */
    overflow: hidden; /* Pastikan tidak ada scrollbar dari konten yang melebihi */
}

/* Buat gambar menjadi latar belakang semu (pseudo-element) */
.app-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* Gunakan path relatif dari root public untuk aset Vite */
    background-image: url('/build/assets/img/1.jpeg');
    background-size: cover; /* Pastikan gambar mengisi seluruh area */
    background-position: center center; /* Pusatkan gambar */
    background-repeat: no-repeat;
    opacity: 0.5;
    z-index: 1; /* Tempatkan di belakang konten teks */
}

/* Teks dan konten harus berada di atas gambar latar belakang */
.app-header .container {
    position: relative; /* Penting agar container berada di atas pseudo-element */
    z-index: 2; /* Pastikan z-index lebih tinggi dari pseudo-element */
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Tambah bayangan teks agar lebih mudah dibaca */
    padding-top: 3rem; /* Tambahkan kembali padding internal untuk konten */
    padding-bottom: 3rem;
}

/* Sembunyikan elemen gambar asli karena kita menggunakan gambar sebagai background */
.header-image-container,
.header-full-width-img {
    display: none; /* Menyembunyikan div dan img yang tidak digunakan untuk display */
}

/* Anda bisa hapus class .bg-primary dan .bg-gradient dari <header> jika warna background sepenuhnya dikontrol oleh gambar.
   Jika tidak, biarkan saja sebagai fallback atau efek tambahan. */
    /* Jika Anda ingin jarak antara gambar dan teks diatur dari header, hapus mb-4 di header-image-container dan tambahkan padding-bottom di sini */
</style>
