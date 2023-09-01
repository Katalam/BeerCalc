<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/drinks', function () {
    return view('drinks');
})->name('drinks');
Route::get('/snacks', function () {
    return view('snacks');
})->name('snacks');
Route::get('/cakes', function () {
    return view('cakes');
})->name('cakes');
