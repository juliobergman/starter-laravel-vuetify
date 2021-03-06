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

// Login
Route::get('/login', function () {
return view('auth.login');
})->name('login')->middleware('guest');

// App
Route::prefix('/app')->group(function(){
    Route::get('/{any?}', function () {
        return view('auth.app');
    })->where('any', '.*')->middleware('auth');
});

// Main Site
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
