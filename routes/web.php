<?php

use App\Controllers\Admin\Dashboard\DashboardController;
use App\Controllers\Front\Homepage\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Controllers\Admin\Homepage\HPSettingsController;

Route::redirect('/', 'homepage');

#START Home Routes
Route::get('/homepage', [HomepageController::class, 'index'])->name('homepage');

#END Home routes


#START Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('hp')->group(function () {
        Route::get('/settings', [HPSettingsController::class, 'index'])->name('hp-settings');
    });
});

#END Admin routes
