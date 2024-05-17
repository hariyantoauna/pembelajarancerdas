<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\Dashboard\BiodataController;
use App\Http\Controllers\Dashboard\AkademikController;
use App\Http\Controllers\Dashboard\PekerjaanController;
use App\Http\Controllers\Dashboard\SertifikasiController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/google/redirect', [SocialController::class, 'googleCallback'])->name('google.callback');


Auth::routes();
Route::resource('/beranda', BerandaController::class);
Route::resource('/chatbot', ChatBotController::class);