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
Route::get('/app', function () {
    return view('netflix.data.layouts.app');
});
Route::get('/home', [NetflixController::class, 'home'])->name('home');
Route::get('/home/{movies}', [NetflixController::class, 'show'])->name('home.show');
Route::get('/create', [NetflixController::class, 'create'])->name('home.create');
Route::post('/store', [NetflixController::class, 'store'])->name('home.store');
Route::delete('/home/destroy/{movie}', [NetflixController::class, 'destroy'])->name('home.destroy');
Route::get('/home/edit/{movie}', [NetflixController::class, 'update'])->name('home.edit');

