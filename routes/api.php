<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('products', [\App\Http\Controllers\API\ProductController::class, 'all']);
Route::get('categories', [\App\Http\Controllers\API\ProductCategoryController::class, 'all']);

Route::post('register', [\App\Http\Controllers\API\UserController::class, 'register']);
Route::post('login', [\App\Http\Controllers\API\UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [\App\Http\Controllers\API\UserController::class, 'fetch']);
    Route::post('user', [\App\Http\Controllers\API\UserController::class, 'updateProfile']);
    Route::post('logout', [\App\Http\Controllers\API\UserController::class, 'logout']);

    Route::get('transactions', [\App\Http\Controllers\API\TransactionController::class, 'all']);
    Route::post('checkout', [\App\Http\Controllers\API\TransactionController::class, 'checkout']);
});
