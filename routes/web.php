<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.app');
// });
// Route untuk Halaman Utama (INDEX)
Route::get('/', function () {
    return view('welcome'); // BENAR: Mengarah ke file konten index
})->name('index'); // Beri nama 'index' untuk konsistensi

// Route untuk Profil Desa
Route::get('/profil-desa', function () {
    return view('pages.profil-desa');
})->name('profil.desa');

// Route untuk Peta Desa
Route::get('/peta-desa', function () {
    return view('pages.peta-desa');
})->name('peta.desa');

// Route untuk Informasi Publik
Route::get('/informasi-publik', function () {
    return view('pages.informasi-publik');
})->name('informasi.publik');

// Route untuk Berita
Route::get('/berita', function () {
    return view('pages.berita');
})->name('berita');

// Route untuk BUMDes
Route::get('/bumdes', function () {
    return view('pages.bumdes');
})->name('bumdes');
