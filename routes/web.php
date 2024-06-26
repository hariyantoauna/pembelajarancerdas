<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\ScholarController;
use App\Http\Controllers\YouTubeController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\GoogleScholarController;
use App\Http\Controllers\Dashboard\BiodataController;
use App\Http\Controllers\Dashboard\AkademikController;
use App\Http\Controllers\Dashboard\PekerjaanController;
use App\Http\Controllers\Dashboard\SertifikasiController;
use App\Http\Controllers\GeminiController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/auth/redirect', [SocialController::class, 'redirect'])->name('google.redirect');
Route::get('/google/redirect', [SocialController::class, 'googleCallback'])->name('google.callback');


Auth::routes();
Route::resource('/beranda', BerandaController::class);

Route::resource('/perpustakaan', PerpustakaanController::class);
Route::get('/books/search', [BooksController::class, 'search'])->name('books.search');
Route::get('/youtube/search', [YouTubeController::class, 'search'])->name('youtube.search');

Route::get('/scholar/search', [ScholarController::class, 'search'])->name('scholar.search');

Route::get('/chat', [ChatbotController::class, 'index'])->name('chat');
Route::post('/chatbot', [ChatbotController::class, 'handle']);