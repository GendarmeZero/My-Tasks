<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixController;

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

//====== NETFLIX MINI PROJECT ======

Route::get('/home', [NetflixController::class, 'home'])->name('home');
Route::get('/home/{movies}', [NetflixController::class, 'movies'])->name('movie');
Route::get('/home/create', [NetflixController::class, 'movies'])->name('movies');
Route::post('/movies', [NetflixController::class, 'post'])->name('movies.store');

