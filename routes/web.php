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

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/oferta', function () {
    return view('oferta');
});

Route::get('/busco', function () {
    return view('busco');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/welcome', function () {
    return view('welcome');
});