<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductsController
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\SalesController;


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

//  ProductsController Routes
Route::get('/', [ProductsController::class, 'welcome']);
Route::get('index', [ProductsController::class, 'index']);
Route::post('/store', [ProductsController::class, 'store']);
Route::get('/edit/{id}', [ProductsController::class, 'edit']);
Route::get('/details/{id}', [ProductsController::class, 'details']);
Route::get('/delete/{id}', [ProductsController::class, 'delete']);
Route::get('/create', [ProductsController::class, 'create']);
Route::get('/item', [ProductsController::class, 'item'])->name('item');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//employee routes
Route::get('/employees/index', [EmployeesController::class, 'index']);
Route::get('/employees/create', [EmployeesController::class, 'create']);
Route::post('/employees/store', [EmployeesController::class, 'store']);

//sales and reporting routes
Route::get('sales/addItem/{id}', [SalesController::class, 'addItem'])->name('addItem');
//Route::get('/sales/addItem', [App\Http\Controllers\SalesController::class, 'addItem'])->name('addItem');

