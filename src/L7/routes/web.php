<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/** ide */
Route::get('/ide', function () {
    return view('ide');
});

/** freestyle */
Route::get('/freestyle', function () {
    return view('welcome');
});

/** dissing */
Route::get('/dissing', function () {
    return view('welcome');
});

/** news */
Route::get('/news', function () {
    return view('welcome');
});
