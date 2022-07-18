<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Admin\PostController::class)
    ->name('posts.')
    ->prefix('posts')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::get('/create', 'create')->name('create');
        Route::get('/{post}', 'show')->name('show');
        Route::put('/{post}', 'update')->name('update');
        Route::delete('/{post}', 'destroy')->name('destroy');
        Route::get('/{post}/edit', 'edit')->name('edit');
    });
