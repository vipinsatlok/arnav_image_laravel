<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;


Route::get("/", [GuestController::class, "index"]);
Route::get("/contact", [GuestController::class, "contact"]);
Route::get("/about", [GuestController::class, "about"]);
Route::get("/privacy-policy", [GuestController::class, "privacyPolicy"]);
Route::get("/term-of-use", [GuestController::class, "termOfUse"]);
Route::fallback(function () {
    return view('guest.not-found');
});
