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

// sezione caracters

Route::get('caracters', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('caracters', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('caracters');

// sezione comics

Route::get('comics', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('comics', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('comics');

// sezione movies

Route::get('movies', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('movies', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('movies');

// sezione tv

Route::get('tv', function () {
    $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('tv', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('tv');

// sezione games

Route::get('games', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('games', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('games');

// sezione collectibles

Route::get('collectibles', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('collectibles', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('collectibles');

// sezione videos

Route::get('videos', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('videos', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('videos');

// sezione fans

Route::get('fans', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('fans', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('fans');

// sezione news

Route::get('news', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('news', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('news');

// sezione shop

Route::get('shop', function () {
     $listaFooter = config('footer'); 
    $listaIcone = config('icons');
    $listaSocial= config('social');
    return view('shop', compact( 'listaFooter', 'listaIcone', 'listaSocial'));
})->name('shop');

// sezione comics singolo

Route::get('/home/{param}', function ($param) {

    $prodotto = config('comics');

    $comics_singolo = '';
    foreach($prodotto as $fumetto){
        if($fumetto['series'] == $param){
            $comics_singolo = $fumetto;
        }
    }
    
   return view('comics_singolo', compact( 'comics_singolo'));
})->name('comics_singolo');
