<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/home', function () {
    return "<h1>Ini Home!</h1>";
});

Route::get('/about', function () {
    echo "<h1 style='text-align: center'><u>Tentang saya</u></h1>";
    echo "<p>Ini website aku. <i>Never stop learning</i>. <strong>Jangan lupa tidur</strong>.</p>";
});

Route::get('/salam/{nama}', function ($nama) {
    echo "<h2>Good day, $nama!</h2>";
});

Route::get('/produk/{nama?}/{qty?}', function ($nama = "N/A", $qty = 0) {
    echo "<p>Jual <strong>$nama</strong>. Stok saat ini: $qty</p>";
});

Route::get('users/{id?}', function ($id = -1) {
    return "Displaying user with ID: $id";
})->where('id', '[0-9]+');

Route::get('/hubungi-kami', function () {
    return '<h3>Hubungi kami</h3>';
});

Route::redirect('/contact-us', '/hubungi-kami', 301);

Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        echo "<h1>Administrasi Mahasiswa</h1>";
    });
    Route::get('/dosen', function () {
        echo "<h1>Administrasi Dosen</h1>";
    });
    Route::get('/staf', function () {
        echo "<h1>Administrasi Staf Kampus</h1>";
    });
});

Route::fallback(function () {
    return "Wah kamu nyasar, turn back!";
});

Route::get('/about', function () {
    $title = 'About Us';
    $description = 'Blogging is website for sharing your thoughts and ideas with the world.';
    return view('about', compact('title', 'description'));
});

