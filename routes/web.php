<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/rumah', function () {
    return view('rumah');
})->name('rumah');

Route::get('/industri', function () {
    return view('industri');
})->name('industri');

Route::get('/floor-coating', function () {
    return view('floor-coating');
})->name('floor-coating');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/produk', function () {
    return view('produk');
})->name('produk');