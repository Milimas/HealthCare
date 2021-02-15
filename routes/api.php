<?php

use App\Http\Controllers\API\AuthController as APIAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', [UserController::class, 'index']);

Route::post('/register', [APIAuthController::class, 'register']);
Route::post('/login', [APIAuthController::class, 'login']);

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('jobs', [JobsController::class, 'index']);
    Route::get('jobs/{id}', [JobsController::class, 'show']);
    Route::post('jobs', [JobsController::class, 'store']);
    Route::put('jobs/{id}', [JobsController::class, 'update']);
    Route::delete('jobs/{id}', [JobsController::class, 'destroy']);
});