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
//Route::resource('products', 'ProductsController');

Route::get('/index',function(){
    return view('products.index');
});
Route::get('/create',function(){
    return view('products.create');
});
// Route::post('/store',function(){
//     products/store;
// });
// Route::post('store', 'App/Http/Controllers/ProductsController@store')->name('products.store');
Route::get('index', [ProductsController::class, 'index']);
Route::post('/store', [ProductsController::class, 'store']);
Route::get('/show', [ProductsController::class, 'show']);
Route::get('/edit', [ProductsController::class, 'edit']);


Route::get('/spcials',function(){
    return view('products.specials');
});
Route::view('/products/specials', 'specials');
Route::view('/products.tees', 'tees');
Route::view('/products.hats', 'hats');
Route::view('/products.sunglasses', 'sunglasses');
Route::view('/products.shoes', 'shoes');
Route::view('/products.login', 'login');