<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('guest.index');
});

// Route::get("",)

include_once(__DIR__ . "/admin.php");
include_once(__DIR__ . "/user.php");
include_once(__DIR__ . "/guest.php");
