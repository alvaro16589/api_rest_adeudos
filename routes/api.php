<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobTypesController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\TypeUsersController;
use App\Http\Controllers\UsersController;
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
Route::resource('jobs', JobsController::class);
Route::resource('jobtypes', JobTypesController::class);
Route::resource('states', StatesController::class);
Route::resource('typeUsers', TypeUsersController::class);
Route::resource('users', UsersController::class);
