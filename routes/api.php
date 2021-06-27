<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\DetallController;
use App\Http\Controllers\DoneController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ReservationController;

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

Route::apiResource('/shop', ShopController::class);
Route::post('/register', [RegisterController::class, 'post']);
Route::post('/login', [LoginController::class, 'post']);
Route::post('/logout', [LogoutController::class, 'post']);
Route::get('/user', [UsersController::class, 'get']);
Route::put('/user', [UsersController::class, 'put']);
Route::post('/like', [LikesController::class, 'post']);
Route::delete('/like', [LikesController::class, 'delete']);
Route::post('/thanks', [ThanksController::class, 'post']);
Route::post('/mypage', [MypageController::class, 'post']);
Route::post('/detall', [DetallController::class, 'post']);
Route::post('/done', [DoneController::class, 'post']);
Route::post('/reservation', [ReservationController::class, 'post']);
Route::delete('/reservation', [ReservationController::class, 'delete']);