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
    return view('auth.login');
});

Route::resource('articulos','App\Http\Controllers\ArticuloController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/galerie', function () {
    return view('auth.galerie');
});

Route::get('/mode', function () {
    return view('auth.mode');
});

Route::get('/damefemme', function () {
    return view('auth.damefemme');
});

Route::get('/africa-femme', function () {
    return view('auth.africa-femme');
});
