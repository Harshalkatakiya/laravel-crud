<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);
Route::get('/products/{id}/show', [ProductController::class, 'show']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::patch('/products/{id}/update', [ProductController::class, 'update']);
Route::delete('/products/{id}/delete', [ProductController::class, 'destroy']);
