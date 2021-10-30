<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/sejacliente', [App\Http\Controllers\Front\ClientController::class, 'store'])->name('front.client.store');
Route::post('/sejaparceiro', [App\Http\Controllers\Front\SupplierController::class, 'store'])->name('front.client.store');
Route::post('/sendcontact', [App\Http\Controllers\Front\SendContactController::class, 'sendContact'])->name('front.client.store');
