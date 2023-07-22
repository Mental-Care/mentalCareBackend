<?php

use App\Http\Controllers\Dashboard\FeedbackController;
use App\Http\Controllers\Dashboard\InterestsController;
use App\Http\Controllers\Dashboard\SpecialtiesController;
use App\Http\Controllers\Dashboard\TherapistsController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('dashboard/interests', InterestsController::class)->middleware(['auth']);
Route::resource('dashboard/specialties', SpecialtiesController::class)->middleware(['auth']);
Route::resource('dashboard/therapists', TherapistsController::class)->middleware(['auth']);
Route::resource('dashboard/feedbacks', FeedbackController::class)->middleware(['auth']);
