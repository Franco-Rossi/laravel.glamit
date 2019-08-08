<?php
use Illuminate\Http\Resources\Json\Resource;


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

Route::get('/', 'PagesController@index');


Route::get('/orders/create', 'OrdersController@create');
Route::post('/orders/buy', 'OrdersController@buy');

/* Route::resource('orders', 'OrdersController'); */
