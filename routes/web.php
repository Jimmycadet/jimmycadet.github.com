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
    return view('welcome');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/app', function () {
    return view('app');
});

Route::get('/partenaires', function () {
    return view('pages/partenaires-indicator');
})->name('partenaires-indicator');

Route::get('/a-propos', function () {
    return view('pages/about-indicator');
})->name('about-indicator');

Route::get('/about', function () {
    return view('pages/about-indicator');
})->name('about-indicator');

Route::get('/cadre-legal', function () {
    return view('pages/cadre-legal-indicator');
})->name('cadre-legal-indicator');


Route::get('/structure-organisationnelle', function () {
    return view('pages/struc-org-indicator');
})->name('struc-org');

Route::get('/confidentialite', function () {
    return view('pages/confidentialite-indicator');
})->name('confidentialite-indicator');


Route::get('/recensement', function () {
    return view('pages/recensement-indicator');
})->name('recensement-indicator');
