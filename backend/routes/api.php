<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::apiResource('products', ProductsController::class);
