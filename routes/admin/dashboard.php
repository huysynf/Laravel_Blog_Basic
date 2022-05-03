<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Admin\DashboardController::class)->name('admin.')->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
});
