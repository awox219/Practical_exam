<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;

// Product routes
Route::apiResource('products', ProductsController::class); 

// Category routes
Route::apiResource('categories', CategoryController::class);