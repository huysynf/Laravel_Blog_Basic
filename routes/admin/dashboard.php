<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Admin\DashboardController::class)->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
});
