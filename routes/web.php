<?php

use App\Controllers\Admin\Dashboard\DashboardController;
use App\Controllers\Front\Homepage\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Controllers\Admin\Homepage\HPSettingsController;
use App\Http\Middleware\Authenticate;

Route::redirect('/', 'homepage');

#START Home Routes
Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');

#END Home routes


#START Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/homepage', [HomepageController::class, 'index'])->name('hp-settings');
})->middleware(Authenticate::class);

#END Admin routes
