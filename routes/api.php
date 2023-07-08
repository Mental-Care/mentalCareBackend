<?php

use App\Http\Controllers\API\Api_AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('logout', [Api_AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('login', [Api_AuthController::class, 'login']);
Route::post('register', [Api_AuthController::class, 'register']);
