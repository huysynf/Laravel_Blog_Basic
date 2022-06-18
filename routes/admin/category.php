<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Admin\CategoryController::class)
    ->name('categories.')
    ->prefix('categories')
    ->group(function (){
        Route::get('/', 'index')->name('index');
        Route::get('/show', 'create')->name('show');
    });
Route::resource('orders', \App\Http\Controllers\Admin\CategoryController::class);
