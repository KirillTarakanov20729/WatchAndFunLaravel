<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', App\Http\Controllers\Auth\Register\CreateController::class)->name('register.create');
Route::post('/register', App\Http\Controllers\Auth\Register\StoreController::class)->name('register.store');

Route::get('/login', App\Http\Controllers\Auth\Login\CreateController::class)->name('login.create');
Route::post('/login', App\Http\Controllers\Auth\Login\StoreController::class)->name('login.store');

Route::get('/logout', App\Http\Controllers\Auth\Login\LogoutController::class)->name('logout');
