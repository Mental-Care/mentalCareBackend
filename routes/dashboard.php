<?php

use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\Category_blogController;
use App\Http\Controllers\Dashboard\EducationController;
use App\Http\Controllers\Dashboard\ExperienceController;
use App\Http\Controllers\Dashboard\FaqsController;
use App\Http\Controllers\Dashboard\FeedbacksController;
use App\Http\Controllers\Dashboard\InterestController;
use App\Http\Controllers\Dashboard\Quizzes_questionController;
use App\Http\Controllers\Dashboard\QuizzesController;
use App\Http\Controllers\Dashboard\Res_questionsController;
use App\Http\Controllers\Dashboard\ResController;
use App\Http\Controllers\Dashboard\SpecialtyController;
use App\Http\Controllers\Dashboard\SchedulesController;
use App\Http\Controllers\Dashboard\StarterPage;
use App\Http\Controllers\Dashboard\TherapistController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [StarterPage::class, 'index'])->middleware(['adminaccess', 'auth', 'verified'])->name('dashboard');

Route::middleware('adminaccess')->group(function () {

    Route::resource('dashboard/interests', InterestController::class)->middleware(['auth']);
    Route::resource('dashboard/specialties', SpecialtyController::class)->middleware(['auth']);
    Route::resource('dashboard/therapists', TherapistController::class)->middleware(['auth']);
    Route::resource('dashboard/feedbacks', FeedbacksController::class)->middleware(['auth']);
    Route::resource('dashboard/experiences', ExperienceController::class)->middleware(['auth']);
    Route::resource('dashboard/educations', EducationController::class)->middleware(['auth']);
    Route::resource('dashboard/schedules', SchedulesController::class)->middleware(['auth']);
    Route::resource('dashboard/users', UserController::class)->middleware(['auth']);
    Route::resource('dashboard/res', ResController::class)->middleware(['auth']);
    Route::resource('dashboard/res_questions', Res_questionsController::class)->middleware(['auth']);
    Route::resource('dashboard/quizzes', QuizzesController::class)->middleware(['auth']);
    Route::resource('dashboard/quizzes_questions', Quizzes_questionController::class)->middleware(['auth']);
    Route::resource('dashboard/blogs', BlogController::class)->middleware(['auth']);
    Route::resource('dashboard/category_blogs', Category_blogController::class)->middleware(['auth']);
    Route::resource('dashboard/faqs', FaqsController::class)->middleware(['auth']);
});
