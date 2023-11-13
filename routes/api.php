<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoverController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('api')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::apiResource('covers', CoverController::class);
});

Route::Post('auth/login', [authtication::class, 'login']);
Route::Post('auth/otpveryfi', [authtication::class, 'otpvery']);
Route::Post('auth/costomer/login', [authtication::class, 'costomerlogin']);

Route::apiResource('product', ProductController::class);
Route::apiResource('costomer', CostomerController::class);
Route::apiResource('costomerreq', CostomerrequistController::class);
Route::post('costomer/aproved/{id}', [CostomerController::class, 'aprovedReq']);
Route::post('costomer/status/{id}', [CostomerController::class, 'statusUpdate']);
Route::post('costomer/password/{id}', [CostomerController::class, 'passwordUpdate']);

// Route::apiResource('user',AdminuserController::class);
// Route::apiResource('studio',StudioController::class);
