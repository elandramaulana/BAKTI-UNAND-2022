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

Route::get('/peta', function () {
    return view('peta');
});

Route::get('/sambutan', function () {
    return view('sambutan');
});

Route::get('/filosofi', function () {
    return view('filosofi');
});

Route::get('/merchandise', function () {
    return view('merchandise');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/fakultas', function () {
    return view('fakultas');
});

Route::get('/anthem', function () {
    return view('anthem');
});