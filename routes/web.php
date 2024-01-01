<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/master', function () {return view('layout.master');});

Route::get('product/create', [ProductController::class,'createProduct'])->name('product.create');
Route::post('product/store', [ProductController::class,'storeProduct'])->name('product.store');
Route::get('products', [ProductController::class,'productList'])->name('product.index');
Route::get('product/{id}',[ProductController::class,'productDetail'])->name('product.detail');
//Route::get('product/{id}/edit',[ProductController::class,'productEdit'])->name('product.edit');
//Route::put('product/{id}/update',[ProductController::class,'updateProduct'])->name('product.update');
//Route::delete('product/{id}',[ProductController::class,'delete'])->name('product.delete');

