<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::group(['prefix' => 'products'], function () {
    
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/upload', [ProductController::class, 'create']);
    Route::post('/upload', [ProductController::class, 'store']);
    Route::get('/search', [ProductController::class, 'search']);
    Route::get('/{id}', [ProductController::class, 'show']);

});

Route::get('/login', [AuthController::class,'index']);

Route::get('/signup',[UserController::class,'create']);
Route::post('/signup', [UserController::class, 'store']);
