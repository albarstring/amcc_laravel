<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;


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

Route::get('/cars', [CarController::class, 'getAllCarRaw']);
Route::get('/halo', function() {
    return 'halo, adib';
});


Route::apiResource('/users',UserController::class);