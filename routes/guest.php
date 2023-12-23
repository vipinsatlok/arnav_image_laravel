<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::get("/", [GuestController::class, "index"]);
Route::get("/contact", [GuestController::class, "contact"]);
Route::get("/about", [GuestController::class, "about"]);