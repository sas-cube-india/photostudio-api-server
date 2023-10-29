<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authModule\authtication;
use App\Http\Controllers\{AdminuserController, CostomerController, CostomerrequistController, ProductController, StudioController};

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Post('auth/login',[authtication::class,'login']);
Route::Post('auth/otpveryfi',[authtication::class,'otpvery']);
Route::Post('auth/costomer/login',[authtication::class,'costomerlogin']);

Route::apiResource('product',ProductController::class);
Route::apiResource('costomer',CostomerController::class);
Route::apiResource('costomerreq',CostomerrequistController::class);
Route::post('costomer/aproved/{id}',[CostomerController::class,'aprovedReq']);
Route::post('costomer/status/{id}',[CostomerController::class,'statusUpdate']);
Route::post('costomer/password/{id}',[CostomerController::class,'passwordUpdate']);



// Route::apiResource('user',AdminuserController::class);
// Route::apiResource('studio',StudioController::class);
