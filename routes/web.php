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
    $links = config('store.navLinks');
    $comics = config('comics');
    return view('welcome', compact('links', 'comics'));
});

Route::get('/otherpage', function () {
    $links = config('store.navLinks');
    return view('other', compact('links'));
});
