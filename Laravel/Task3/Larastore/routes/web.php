<?php

use App\Http\Controllers\ProductsController;
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

//====== Larastore MINI PROJECT ======

Route::get('/app',function(){
    return view('/Larastore/data/layouts/app');

});
//-----------------INDEX-----------------I
Route::get('/index', [ProductsController::class, 'index'] );

//-----------------ALL-----------------I
Route::get('/index/all', [ProductsController::class, 'all'] );


//-----------------SHOW-----------------I
Route::get('/index{id}', [ProductsController::class, 'show'] )->name('product.show');
//-----------------STORE-----------------I
Route::post('/index' , [ProductsController::class, 'store'] )->name('product.store');
//-----------------CREATE-----------------I
Route::get('/create', [ProductsController::class, 'create'] )->name('product.create');

//-----------------DELETE-----------------I
Route::delete('index/{id}',[ProductsController::class,'destroy'])->name('product.destroy');
