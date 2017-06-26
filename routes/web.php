<?php

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
Route::group(['middleware'=>'admin'], function () {
  Route::resource('products','ProductsController');
});
Route::resource('orders','OrdersController');
Route::resource('shopping_carts','ShoppingCartsController',[
'only'=>['store','destroy']
]);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Pendiente', function(){
  return view('pendientes');
});
Auth::routes();
Route::resource('categories','CategoriesController');
Route::get('/home', 'HomeController@index')->name('home');
