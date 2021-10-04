<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('nama', function () {
    return 'Nama Saya Kayla Rahmanisa';
});

Route::get('umur', function () {
    $umur = 17;
    return 'Saya berumur ' . $umur;
});

Route::get('alamat', function () {
    return 'Rumah Saya di Jl.Sukamenak';
});

Route::get('skul', function () {
    return 'Saya Bersekolah di SMK ASSALAAM BANDUNG';
});

Route::get('sekian', function () {
    return 'Sekian Wassalaam';
});

//parameter wajib
Route::get('/aku/riwayat/{riwayat}', function ($riwayat) {
    return $riwayat . ' anak ke 3 dari 4 bersaudara';
});

//parameter wajib
Route::get('/aku/riwayat/{nama}/{sekola}', function ($nama, $sekola) {
    return 'Nama saya : ' . $nama . '<br>Saya bersekolah di ' . $sekola;
});

//parameter optional kalo tidak diisi
Route::get('/nama-saya-adalah-{nama?}', function ($nama = null) {
    return 'Nama Saya Adalah : ' . $nama;
});

//parameter optional kalo di isi
Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'NAMA WAJIB DI ISI!!') {
    return 'Nama Saya Adalah : ' . $nama;
});

//LATIHAN
Route::get('/hitung-luas-segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
    $hasil = $alas * $tinggi * 0.5;
    return 'Hasil Luas Segitiga : ' . $hasil;
});
Route::get('/hitung-luas-segitiga/{alas?}/{tinggi?}', function ($alas = 1, $tinggi = 1) {
    $hasil = $alas * $tinggi * 0.5;
    return 'Hasil Luas Segitiga : ' . $hasil;
});

//route group
Route::group(['prefix' => 'jurusan'], function () {
    Route::get('/', function () {
        return "Berhasil";
    });
    Route::get('/kelas/{namaKelas}', function ($namaKelas) {
        return $namaKelas;
    });
    Route::get('/wali-kelas/{namaKelas}', function ($nama) {
        return $nama;
    });
});
