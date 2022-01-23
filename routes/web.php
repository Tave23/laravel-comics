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

    $data = config('links');

    $data2 = config('comics');

    return view('home', ['links' => $data], ['comics' => $data2]);
})->name('home');

Route::get('/characters', function () {
    return view('linkHeader.characters');
})->name('characters');

Route::get('/comics', function () {
    return view('linkHeader.comics');
})->name('comics');

Route::get('/movies', function () {
    return view('linkHeader.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('linkHeader.tv');
})->name('tv');

Route::get('/games', function () {
    return view('linkHeader.games');
})->name('games');

Route::get('/collectibles', function () {
    return view('linkHeader.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('linkHeader.videos');
})->name('videos');

Route::get('/fans', function () {
    return view('linkHeader.fans');
})->name('fans');

Route::get('/news', function () {
    return view('linkHeader.news');
})->name('news');

Route::get('/shop', function () {
    return view('linkHeader.shop');
})->name('shop');

