<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('products', [\App\Http\Controllers\API\ProductController::class, 'all']);
Route::get('categories', [\App\Http\Controllers\API\ProductCategoryController::class, 'all']);

Route::post('register', [\App\Http\Controllers\API\UserController::class, 'register']);
Route::post('login', [\App\Http\Controllers\API\UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [\App\Http\Controllers\API\UserController::class, 'fetch']);
});
