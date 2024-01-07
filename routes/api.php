<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Category\CategoryController;

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

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->apiResource('/categories', CategoryController::class);
Route::middleware('auth:sanctum')->apiResource('/products', ProductController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
