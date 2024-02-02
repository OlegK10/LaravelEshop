<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Admin\Dashboard\DashboardController;
use App\Controllers\Admin\Homepage\HPSettingsController;
use App\Models\Admin\Homepage\HPSettings;

Route::get('/', function () {
    return view('Admin.Dashboard.Dashboard');
});


#START Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('hp')->group(function () {
        Route::get('/settings', [HPSettingsController::class, 'index'])->name('hp-settings');
    });
});

#END Admin routes
