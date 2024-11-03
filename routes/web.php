<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.about');
});

require __DIR__.'/auth.php';
