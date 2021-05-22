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
    return view('home.index0253');
})->name('home');

Route::get('/artikel', function () {
    return view('artikel.index0253');
})->name('artikel');

Route::get('/contact us', function () {
    return view('contact us.index0253');
})->name('contact us');
