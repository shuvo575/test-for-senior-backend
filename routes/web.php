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

Route::get('/', function () {
    return view('welcome');
});

Route::get('second-buyer-eloquent', 'SalesController@eloquent_way');
Route::get('second-buyer-no-eloquent', 'SalesController@no_eloquent_way');
Route::get('purchase-list-eloquent', 'SalesController@purchase_eloquent_way');
Route::get('purchase-list-no-eloquent', 'SalesController@purchase_no_eloquent_way');
Route::get('record-transfer', 'RecordsController@insert');
Route::get('define-callback-js', 'JsController@callback');
