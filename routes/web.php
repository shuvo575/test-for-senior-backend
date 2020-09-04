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
Route::get('sort-js', 'JsController@sort_js');
Route::get('foreach-js', 'JsController@foreach_js');
Route::get('filter-js', 'JsController@filter');
Route::get('map-js', 'JsController@map');
Route::get('reduce-js', 'JsController@reduce');
Route::get('animation', 'JsController@animation');
Route::get('i-m-funny', 'IqController@test');
