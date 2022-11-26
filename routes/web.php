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

Route::get('/welcome', function () {
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

Route::get('/mi_perfil', function () {
    return view('/mi_perfil');
});

Route::get('/homepage', function () {
    return view('/homepage');
});

Route::get('/Empresa', function () {
    return view('/Empresa');
});

Route::get('/estudiante', function () {
    return view('/estudiante');
});

Route::get('/iniciar_sesion', function () {
    return view('/iniciar_sesion');
});


Route::get('/iniciar_sesion', function () {
    return view('/iniciar_sesion');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/post/{postID}', [PostController::class, 'single'])->middleware(['auth', 'verified'])->name('single.post');

Route::get('/messages/{userID}', [MessageController::class, 'index'])->middleware(['auth', 'verified'])->name('messages');

