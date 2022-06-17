<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Admin\ProductController::class)
    ->name('products.')
    ->prefix('products')
    ->group(function (){
        Route::get('/', 'index')->name('index');
    });

    Route::resource(ProductController::class);
