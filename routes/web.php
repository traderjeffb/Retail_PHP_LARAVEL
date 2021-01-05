<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductsController
use App\Http\Controllers\ProductsController;



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
});

Route::get('/index',function(){
    return view('products.index');
});
Route::get('/create',function(){
    return view('products.create');
});
Route::get('/home',function(){
    return view('products.home');
});

Route::get('index', [ProductsController::class, 'index']);
Route::post('/store', [ProductsController::class, 'store']);
Route::get('/edit{id}', [ProductsController::class, 'edit{id}']);
Route::get('/details{id}', [ProductsController::class, 'details{id}']);
Route::get('/delete{id}', [ProductsController::class, 'delete{id}']);



Route::get('/spcials',function(){
    return view('products.specials');
});
Route::view('/products/specials', 'specials');
Route::view('/products.tees', 'tees');
Route::view('/products.hats', 'hats');
Route::view('/products.sunglasses', 'sunglasses');
Route::view('/products.shoes', 'shoes');
Route::view('/products.login', 'login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
