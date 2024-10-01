<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {return view('welcome');});
Route::get('/book', [BookController::class, 'index'])->name('home');
Route::get("/form", function () {return view('form');});
Route::post("/submit", [BookController::class, "form"]);
Route::get("/create", [BookController::class, "store"]);
Route::get("/show", [BookController::class, "show"]);
// Penjelasan untuk line 10
// Baris ini membuat rute (jalur) untuk URL "/book".
// Ketika mengunjungi halaman "/book" di browser,
// PHP akan mencari controller yang bernama "BookController"
// dan menjalankan fungsinya yang bernama "index".
// Controller ini seperti "pengatur lalu lintas" yang memutuskan apa yang harus dilakukan
// ketika seseorang membuka halaman "/book".
// Selain itu, rute ini diberi nama "home", sehingga nanti kita bisa menggunakan nama ini
// untuk merujuk ke rute "/book" lebih mudah di tempat lain dalam kode kita.
