<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])->name('submit-data-message');
Route::get('/contact/all', [ContactController::class, 'allData'])->name('submit-data');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('submit-form');
