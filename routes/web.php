<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Admin\Dashboard\DashboardController;


Route::get('/', function () {
    return view('Admin.Dashboard.Dashboard');
});


#START Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'render'])->name('dashboard');
});

#END Admin routes
