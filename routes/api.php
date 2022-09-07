<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
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

Route::post('/registeradm', [AuthController::class, 'registeradm']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    // User
    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/users', [AuthController::class, 'users']);
    Route::put('/user', [AuthController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/registeradm', [AuthController::class, 'registeradm']);

    // Get All Booking User
    Route::get('/booking', [BookingController::class, 'list']);

    // Get One Booking User
    Route::get('/booking/{id}', [BookingController::class, 'show']);
    // Create Booking User
    Route::post('/booking', [BookingController::class, 'store']);

});
