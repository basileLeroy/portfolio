<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.about');
})->name("about");

Route::get('/contact', function () {
    return view('pages.contact');
})->name("contact");

Route::get('/projects', function () {
    return view('pages.projects');
})->name("projects");

require __DIR__.'/auth.php';
