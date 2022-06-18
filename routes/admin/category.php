<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Admin\CategoryController::class)
    ->name('categories.')
    ->prefix('categories')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{category}', 'show')->name('show');
        Route::put('/{category}', 'update')->name('update');
        Route::delete('/{category}', 'destroy')->name('destroy');
        Route::get('/{category}/edit', 'edit')->name('edit');
    });
