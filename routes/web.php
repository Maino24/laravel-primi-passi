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

    $title = "homepage";

    return view('homepage', compact('title'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});