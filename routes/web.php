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
    return view('index');
})->name('home');
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');
Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');
Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
Route::get('/virtual-tour', function () {
    return view('virtualTour');
})->name('virtual-tour');
Route::get('/virtual-tour/mulai', function () {
    return view('virtualTour.index');
})->name('virtual-tour.mulai');
