<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\InventoryController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\IngredientController;

Route::prefix('api')->group(function () {
    Route::prefix('/inventory')->group(function () {
        Route::get('/list', [InventoryController::class, 'index'])->name('api-inventory.list');
        Route::post('/store', [InventoryController::class, 'store'])->name('api-inventory.store');
    });

    Route::prefix('/order')->group(function () {
        Route::get('/list', [OrderController::class, 'index'])->name('api-order.list');
        Route::post('/store', [OrderController::class, 'store'])->name('api-order.store');
    });

    Route::prefix('/menu')->group(function () {
        Route::get('/list', [MenuController::class, 'index'])->name('api-menu.list');
        Route::post('/store', [MenuController::class, 'store'])->name('api-menu.store');
    });

    Route::prefix('/ingredient')->group(function () {
        Route::get('/list', [IngredientController::class, 'index'])->name('api-ingredient.list');
        Route::post('/store', [IngredientController::class, 'store'])->name('api-ingredient.store');
    });
});