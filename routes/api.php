<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductApiController;

// Public API routes (login/register)
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

// Protected routes (require token)
Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('products', ProductApiController::class);
});
