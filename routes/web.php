<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/admin', function () {
    return view('layouts.admin');
});
*/
Route::get('/panel-administrativo',[HomeController::class, 'index'])->name('home');
Route::resource('/services',ServiceController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/home',[AdminController::class,'index']);

route::get('/home',[HomeController::class,'index']);