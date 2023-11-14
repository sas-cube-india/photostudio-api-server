<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\authModule\authtication;
use App\Http\Controllers\CostomerController;
use App\Http\Controllers\CostomerrequistController;
use App\Http\Controllers\ListOptionsController;
use App\Http\Controllers\ProductController;
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

    Route::get('options/orientations', [ListOptionsController::class, 'orientation_options']);
    Route::get('options/orientations-sizes/{orientation_id}', [ListOptionsController::class, 'orientation_size_options']);
    Route::get('options/sheets', [ListOptionsController::class, 'sheet_options']);
    Route::get('options/covers', [ListOptionsController::class, 'cover_options']);

    Route::get('pricing/sheet/{sheet_id}/orientation-size/{orientation_size_id}', [PricingController::class, 'sheet_pricing']);
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
