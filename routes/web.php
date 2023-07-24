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
    // inseriamo una variabile che riprenda l'array associativo contenuto nel file comics
    $DcCards = config('comics.DcCards');
    
    return view('home',compact('DcCards'));
});
