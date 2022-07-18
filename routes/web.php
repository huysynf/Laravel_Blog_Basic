<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('admin.dashboard.index');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::name('admin.')->group(function () {
        includeRoutes(__DIR__.'/admin/');
    });
});

Route::controller(\App\Http\Controllers\Auth\LoginController::class)->prefix('auth')->name('auth.')->group(function () {
    Route::prefix('social')->name('social.')->group(function () {
        Route::get('/{social}/redirect', 'handleSocialRedirect')->name('redirect');

        Route::get('/{social}/callback', 'handleSocialCallback')->name('callback');
    });
});
