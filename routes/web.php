<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {return view('welcome');});
//PART 1 & 2
Route::get('/book', [BookController::class, 'index'])->name('home');
// REQUEST
Route::get("/form", function () {return view('form');});
Route::post("/submit", [BookController::class, "form"]);
// Eloquent CREATE
Route::get("/create", [BookController::class, "store"]);
Route::get("/create2", [BookController::class, "store2"]);
Route::get("/create3", [BookController::class, "store3"]);
// Eloquent READ
Route::get("/show", [BookController::class, "show"]);
// Eloquent untuk UPDATE & DELETE
Route::get('/Products/{id}/edit', [BookController::class, 'edit']);
Route::put('/Products/{id}', [BookController::class, 'update']);
Route::delete('/Products/{id}', [BookController::class, 'destroy']);
// Penjelasan untuk line 10
// Baris ini membuat rute (jalur) untuk URL "/book".
// Ketika mengunjungi halaman "/book" di browser,
// PHP akan mencari controller yang bernama "BookController"
// dan menjalankan fungsinya yang bernama "index".
// Controller ini seperti "pengatur lalu lintas" yang memutuskan apa yang harus dilakukan
// ketika seseorang membuka halaman "/book".
// Selain itu, rute ini diberi nama "home", sehingga nanti kita bisa menggunakan nama ini
// untuk merujuk ke rute "/book" lebih mudah di tempat lain dalam kode kita.
