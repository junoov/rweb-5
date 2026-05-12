<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello, World!";
});
Route::get('/about', function () {
    return "Rizky Noviansyah 2300018364";
});
Route::get('/kontak', function () {
    return "Ini Halaman Kontak";
});

Route::get('/nama/{nama}', function ($nama) {
    return "Halo, " . $nama;
});

Route::get('/umur/{umur}', function ($umur) {
    return "Umur saya " . $umur . " tahun";
});

