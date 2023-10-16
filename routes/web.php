<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/products',[ProductController::class, 'index']);

Route::get('products/upload', [ProductController::class, 'create']);

Route::post('products/upload', [ProductController::class, 'store']);

Route::get('products/search', [ProductController::class, 'search']);

Route::get('products/{id}', [ProductController::class, 'show']);
