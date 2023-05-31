<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/Homepage', function () {
    return view('Homepage');
});

Route::get('/AddRecipe', function () {
    return view('AddRecipe');
});

Route::get('/DummyDataBase', function () {
    return view('DummyDataBase');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::post('/Login', function () {
    return view('Login');
});

Route::put('/Login', function () {
    return view('Login');
});

Route::get('/PasswordReset', function () {
    return view('PasswordReset');
});

Route::post('/PasswordReset', function () {
    return view('PasswordReset');
});

Route::put('/PasswordReset', function () {
    return view('PasswordReset');
});

Route::get('/RecipeSelection', function () {
    return view('RecipeSelection');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::post('/Register', function () {
    return view('Register');
});

Route::get('/Search', function () {
    return view('Search');
});

Route::get('/Test', function () {
    return view('Test');
});

Route::get('/UserHomepage', function () {
    return view('UserHomepage');
});

Route::get('/UserHomepageJS', function () {
    return view('UserHomepageJS');
});