<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\Role;

Route::get('/', function () {
    return view('home');
});



Route::get('/programs', [ProgramController::class, 'index']);

Route::get('/program/{id}', [ProgramController::class, 'show']);

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/login', function () {
//     return view('login.index');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(Role::class);
    Route::get('/learning', [LearningController::class, 'index'])->middleware(Role::class);
});
