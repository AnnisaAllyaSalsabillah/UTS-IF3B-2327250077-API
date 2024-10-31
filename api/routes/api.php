<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialUsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/social_users', [SocialUsersController::class, 'index']);
Route::post('/social_users', [SocialUsersController::class, 'store']);
