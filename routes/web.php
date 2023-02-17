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
})->name('home');

Route::get('caracters', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('caracters', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('caracters');

Route::get('comics', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('comics', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('comics');

Route::get('movies', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('movies', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('movies');

Route::get('tv', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('tv', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('tv');

Route::get('games', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('games', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('games');

Route::get('collectibles', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('collectibles', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('collectibles');

Route::get('videos', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('videos', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('videos');

Route::get('fans', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('fans', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('fans');

Route::get('news', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('news', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('news');

Route::get('shop', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('shop', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('shop');