<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductsController
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


//use App\Http\Controllers\Auth;


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
Route::get('index', [ProductsController::class, 'index'])->name('products.index');
Route::post('/store', [ProductsController::class, 'store']);
Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
Route::get('/details/{id}', [ProductsController::class, 'details'])->name('products.details');
Route::get('/delete/{id}', [ProductsController::class, 'delete'])->name('products.delete');
Route::get('/create', [ProductsController::class, 'create'])->name('products.create');
Route::get('/item', [ProductsController::class, 'item'])->name('item');
Route::post('/update/{id}',[ProductsController::class, 'update'])->name('products.update');
// {{ url('/store') }}
// Route::get('/jeff/{whateverIwriteInURLwillStoreHere}',[ProductsController::class,'jeff'])->name('jeff');
Auth::routes();
//home routes
Route::get('/home', [HomeController::class, 'index'])->name('home');

//employee routes
Route::get('/employees/index', [EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeesController::class, 'create'])->name('employees.create');
Route::post('/employees/store', [EmployeesController::class, 'store'])->name('employees.store');

//sales and reporting routes
Route::get('sales/addItem/{id}', [SalesController::class, 'addItem'])->name('addItem');
//Route::get('/sales/addItem', [App\Http\Controllers\SalesController::class, 'addItem'])->name('addItem');

