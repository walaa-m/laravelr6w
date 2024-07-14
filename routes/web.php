<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CarController;

// Accounts Routes
Route::prefix('accounts')->group(function () {
    Route::get('/', [AccountController::class, 'index']);
    Route::get('/admin', [AccountController::class, 'admin']);
    Route::get('/user', [AccountController::class, 'user']);
});

// Cars Routes
Route::prefix('cars')->group(function () {
    // USA Cars
    Route::prefix('usa')->group(function () {
        Route::get('/ford', [CarController::class, 'ford']);
        Route::get('/tesla', [CarController::class, 'tesla']);
    });

    // German Cars
    Route::prefix('ger')->group(function () {
        Route::get('/mercedes', [CarController::class, 'mercedes']);
        Route::get('/audi', [CarController::class, 'audi']);
        Route::get('/volkswagen', [CarController::class, 'volkswagen']);
    });
});
