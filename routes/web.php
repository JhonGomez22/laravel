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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\ContProducto;

Route::controller(ContProducto::class)->group(function (){
    Route::get('/producto/{id}','show');
    Route::get('/producto','index');
});

use App\Http\Controllers\ContCliente;

Route::controller(ContCliente::class)->group(function (){
    Route::get('/cliente/{id}','show');
    Route::get('/cliente','index');
});


use App\Http\Controllers\ContCompra;

Route::controller(ContCompra::class)->group(function (){
    Route::get('/compra/{id}','show');
    Route::get('/compra','index');
});
