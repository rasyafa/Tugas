<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {return view('welcome');});
//PART 1 & 2
Route::get('/book', [HomeController::class, 'index'])->name('home');
// REQUEST
Route::get("/form", function () {return view('form');});
Route::post("/submit", [HomeController::class, "form"]);
// Eloquent CREATE
Route::post("/create", [HomeController::class, "store"]);
// Eloquent READ
Route::get("/show", [HomeController::class, "show"]);
// Eloquent untuk UPDATE & DELETE
Route::get('/Products/{id}/edit', [HomeController::class, 'edit']);
Route::put('/Products/{id}', [HomeController::class, 'update']);
Route::delete('/Products/{id}', [HomeController::class, 'destroy']);
// VALIDATOR
Route::get("/input",[HomeController::class, "input"]);

// Penjelasan untuk line 10
// Baris ini membuat rute (jalur) untuk URL "/book".
// Ketika mengunjungi halaman "/book" di browser,
// PHP akan mencari controller yang bernama "BookController"
// dan menjalankan fungsinya yang bernama "index".
// Controller ini seperti "pengatur lalu lintas" yang memutuskan apa yang harus dilakukan
// ketika seseorang membuka halaman "/book".
// Selain itu, rute ini diberi nama "home", sehingga nanti kita bisa menggunakan nama ini
// untuk merujuk ke rute "/book" lebih mudah di tempat lain dalam kode kita.
