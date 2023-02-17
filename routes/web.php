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
    $prodotto = config('comics');
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('home', compact('prodotto', 'listaFooter', 'listaIcone', 'listaSocial'));
});

Route::get('/', function () {
    return view('caracters');
});

Route::get('/', function () {
    return view('comics');
});

Route::get('/', function () {
    return view('movies');
});

Route::get('/', function () {
    return view('tv');
});

Route::get('/', function () {
    return view('games');
});

Route::get('/', function () {
    return view('collectibles');
});

Route::get('/', function () {
    return view('videos');
});

Route::get('/', function () {
    return view('fans');
});

Route::get('/', function () {
    return view('news');
});

Route::get('/', function () {
    return view('shop');
});