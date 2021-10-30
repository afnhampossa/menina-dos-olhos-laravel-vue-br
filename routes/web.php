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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sejacliente', [App\Http\Controllers\Front\ClientController::class, 'create'])->name('front.client.create');
Route::get('/sejaumparceiro', [App\Http\Controllers\Front\SupplierController::class, 'create'])->name('front.supplier.create');

// Novo 
Route::get('/cliente', [App\Http\Controllers\Front\ClientController::class, 'store_cliente'])->name('store.cliente');
Route::get('/supplier', [App\Http\Controllers\Front\SupplierController::class, 'store'])->name('store.supplier');
Route::get('/contact', [App\Http\Controllers\Front\SendContactController::class, 'sendContact'])->name('store.sendContact');

Route::group(['prefix'=>"admin", 'middleware'=>"auth"], function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::resource('clients', \App\Http\Controllers\Admin\ClientsController::class);
    Route::resource('suppliers', \App\Http\Controllers\Admin\SuppliersController::class);

});
