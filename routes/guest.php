<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;


Route::get("/", [GuestController::class, "index"])->name("index");
Route::get("/get", [GuestController::class, "getImageData"])->name("index.get");




Route::get("/contact", [GuestController::class, "contact"]);
Route::get("/about", [GuestController::class, "about"]);
Route::get("/privacy-policy", [GuestController::class, "privacyPolicy"]);
Route::get("/term-of-use", [GuestController::class, "termOfUse"]);
Route::get("/{imageId}", [GuestController::class, "downlaod"]);
Route::post('/upload', [GuestController::class, 'upload']);
Route::get('/delete/{password}/{imageId}', [GuestController::class, 'delete']);

// Route::fallback(function () {
//     return view('guest.not-found');
// });
