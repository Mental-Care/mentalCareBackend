<?php

use App\Http\Controllers\Dashboard\InterestsController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('dashboard/interests', InterestsController::class);
