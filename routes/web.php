<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Admin\Dashboard\DashboardController;

Route::get('/', function () {
    return view('Admin.Dashboard.Dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'render'])->name('dashboard');

