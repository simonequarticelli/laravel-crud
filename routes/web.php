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
    // ->name => assegna nome alla rotta
})->name('home');

// definisco la rotta in questo modo per mantenere la mappatura
// e per evitare di crearne ulteriori per le CRUD
Route::resource('/products', 'ProductController');
