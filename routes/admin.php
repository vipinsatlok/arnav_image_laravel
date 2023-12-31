<?php

use App\Http\Controllers\Admin\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

function adminRoutes()
{
    return Route::middleware('auth')
        ->prefix('admin');
}


adminRoutes()->group(function () {
    // image routes
    Route::get('/image', [ImageController::class, "index"])->name("admin.image");
    Route::delete('/image/{id}', [ImageController::class, "destroy"])->name("admin.image.delete");
    Route::get('/image/create', [ImageController::class, "create"])->name("admin.image.create");
    Route::post('/image/create', [ImageController::class, "store"])->name("admin.image.store");
});
