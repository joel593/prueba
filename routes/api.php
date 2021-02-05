<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ConfigurationController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/customers',[UserController::class, 'index']);
Route::post('/customers/create',[UserController::class, 'store']);
Route::get('/customers/{id}',[UserController::class, 'show']);
Route::put('/customers/{id}',[UserController::class, 'update']);
Route::delete('/customers/{id}', [userController::class, 'destroy']);




