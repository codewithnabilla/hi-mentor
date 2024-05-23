<?php

use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', function () {
    return view('register.index');
});
