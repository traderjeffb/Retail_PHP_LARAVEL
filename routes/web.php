<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductsController
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EmployeesController;




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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/index',function(){
//     return view('products.index');
// });
// Route::get('/create',function(){
//     return view('products.create');
// });
// Route::get('/home',function(){
//     return view('products.home');
// });
Route::get('/', [ProductsController::class, 'welcome']);
Route::get('index', [ProductsController::class, 'index']);
Route::post('/store', [ProductsController::class, 'store']);
Route::get('/edit/{id}', [ProductsController::class, 'edit']);
Route::get('/details/{id}', [ProductsController::class, 'details']);
Route::get('/delete/{id}', [ProductsController::class, 'delete']);
Route::get('/create', [ProductsController::class, 'create']);
Route::get('/item', [ProductController::class, 'item']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/item', function () {
    return view('products.item');
});

//employee routes
Route::get('/employees/index', [EmployeesController::class, 'index']);
Route::get('/employees/create', [EmployeesController::class, 'create']);
Route::post('/employees/store', [EmployeesController::class, 'store']);

