<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Auth as Middleware;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    // Routes for authenticated users here
    Route::get('.', function () {
        return view('home');
    })->name('home');
});
