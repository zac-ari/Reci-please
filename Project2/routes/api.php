<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;


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


//Route::post("upload", \App\Http\Controllers\UploadController::class);
Route::group(['prefix' => 'Recipe'], function () {
    Route::get('/', [RecipeController::class, 'index']);
    Route::get('find', [RecipeController::class, 'find']);
    Route::post('addrecipe', [RecipeController::class, 'addrecipe']);
    //Route::put('/', [RecipeController::class, 'update']);
    //Route::delete('/', [RecipeController::class, 'delete']);
});

Route::group(['prefix' => 'User'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('find', [UserController::class, 'find']);
    Route::post('adduser', [UserController::class, 'adduser']);
    //Route::put('/', [UserController::class, 'update']);
    //Route::delete('/', [UserController::class, 'delete']);
   
});

Route::group(['prefix' => 'Review'], function () {
    Route::get('/', [ReviewController::class, 'index']);
    Route::get('find', [ReviewController::class, 'find']);
    Route::post('addreview', [ReviewController::class, 'addreview']);
    //Route::put('/', [ReviewController::class, 'update']);
    //Route::delete('/', [ReviewController::class, 'delete']);
   
});