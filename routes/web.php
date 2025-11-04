<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

// Route::get('/', function () {
//     return view('greeting', ['name' => 'Finn']);
// });
Route::get('/', [ProjectController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

// Add this redirect so /aboutme goes to /about
// Route::redirect('/about', '/about');

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);