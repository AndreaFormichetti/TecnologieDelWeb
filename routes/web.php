<?php

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

Route::get('/categorie', function (){
    return view('categories');
});

Route::get('/results', function (){
    return view('results');
});

Route::get('/authors', function (){
    return view('authors');
});

Route::get('/wishlist', function (){
    return view('wishlist');
});

Route::get('/library', function (){
    return view('library');
});

