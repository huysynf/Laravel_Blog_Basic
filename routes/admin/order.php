<?php

use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Admin\OrderController::class)
    ->name('orders.')
    ->prefix('orders')
    ->group(function (){
        Route::get('/', 'index')->name('index');
        Route::get('/show', 'create')->name('show');
    });
    Route::resource(OrderController::class);
