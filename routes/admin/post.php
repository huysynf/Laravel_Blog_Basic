<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Admin\PostController::class)
    ->name('posts.')
    ->prefix('posts')
    ->group(function (){
        Route::get('/', 'index')->name('index');
    });

    Route::resource('products', \App\Http\Controllers\Admin\PostController::class);
