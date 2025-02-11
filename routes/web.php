<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.about');
})->name("about");

Route::get('/contact', function () {
    return view('pages.contact');
})->name("contact");
Route::post('/contact', [ContactController::class, 'index'])->middleware('throttle:5,1')->name('sendMessage');

Route::get('/projects', function () {
    return view('pages.projects');
})->name("projects");

Route::get('/terms-and-services', function () {
    return view('pages.terms');
})->name("terms");

require __DIR__.'/auth.php';
