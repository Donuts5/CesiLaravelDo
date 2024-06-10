<?php

use App\Http\Controllers\Cars\CarController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

Route::get('/error', function () {
    return view('welcome');
})->name("verification.notice");

Route::resource("cars", CarController::class);
