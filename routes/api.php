<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('createCategory', [CategoryController::class, 'createCategory']);
Route::post('updateCategory', [CategoryController::class, 'updateCategory']);
Route::get('allCategory', [CategoryController::class, 'allCategory']);
Route::get('deleteCategory/{id}', [CategoryController::class, 'deleteCategory']);
