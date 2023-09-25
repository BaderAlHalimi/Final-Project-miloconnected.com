<?php

use App\Http\Controllers\Api\V1\AccessTokensController;
use App\Http\Controllers\Api\V1\SubscriptionsController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum','api.key'])->group(function () {
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('auth/access-tokens', [AccessTokensController::class, 'index']);
    Route::delete('auth/access-tokens/{id?}', [AccessTokensController::class, 'destroy']);
    Route::post('/change_password', [UserController::class, 'changePassword']);
    Route::get('subscriptions', [SubscriptionsController::class, 'index']);
});

Route::middleware('guest:sanctum')->group(function () {
    Route::post('auth/access-tokens', [AccessTokensController::class, 'store']);
    Route::post('/register', [UserController::class, 'store']);
    Route::post('/forgot_password', [UserController::class, 'sendResetLinkEmail']);
});
