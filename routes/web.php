<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/books', [BookController::class, 'index']);
