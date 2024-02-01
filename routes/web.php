<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Admin\Dashboard\DashboardController;

const ADMIN_ROUTE = 'admin';

Route::get('/', function () {
    return view('Admin.Dashboard.Dashboard');
});


#START Admin Routes 

Route::prefix(ADMIN_ROUTE)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'render'])->name('dashboard');
});

#END Admin routes 
