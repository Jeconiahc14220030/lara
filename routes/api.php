<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// lara.test/api/tes
Route::get('/tes', function(){
    return 'tes API';
});

Route::middleware('auth:sanctum')->get('/get/pelanggan/{id}', [ApiController::class, 'get_pelanggan']);

Route::post('get/token', [ApiController::class, 'get_token']);
