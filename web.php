<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return '<h2>Nama: Muhammad Fakhrizal Garnindyo</h2><br><h2>NIM: 0110123280</h2><br><h2>Rombel: SI05</h2>';
});

Route::get('/profil', function () {
    return view('profil',[
        "nama" => "Muhammad Fakhrizal Garnindyo",
        "umur" => 19,
        "email" => "fakhrizalgarnindyo@gmail.com",
        "kampus" => "STT terpadu Nurul Fikri",
        "alamat" => "Bojonggede,Kabupaten Bogor"

    ]);
});

Route::get('/admin', [AdminController::class,'index']);
