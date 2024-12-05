<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\DomainController;
use App\Http\Controllers\Api\TestimoniController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('orders', OrderController::class);
Route::apiResource('domains', DomainController::class);
Route::apiResource('testimoni', TestimoniController::class);
