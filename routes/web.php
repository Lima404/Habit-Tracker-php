<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get(uri: '/', action: [App\Http\Controllers\SiteController::class, 'index']);