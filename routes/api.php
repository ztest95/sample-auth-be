<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public authentication routes
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
    });
});

Route::get('/', function () {
    return response()->json([
        'message' => 'API is running',
        'version' => '1.0.0',
        'endpoints' => [
            'POST /api/auth/register' => 'Register a new user',
            'POST /api/auth/login' => 'Login user',
            'POST /api/auth/logout' => 'Logout user (requires auth)',
            'GET /api/auth/user' => 'Get user profile (requires auth)',
        ]
    ]);
});