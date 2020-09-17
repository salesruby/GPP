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
})->name('welcome');


Route::get('/video', function () {
    return view('video');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact-us', 'PageController@contact')->name('contact-us');
Route::resource('contacts', 'ContactController');
Route::get('/about-us', 'PageController@about')->name('about-us');
Route::get('/setup', 'SetupController@index');

Route::group(['middleware' => ['auth','admin'], 'prefix'=>'admin', 'namespace' =>'Admin'], function (){
    Route::get('users/delete', 'UserController@destroy')->name('users.delete');
    Route::resource('users', 'UserController');
    Route::post('orders/respond', 'OrderController@respondToOrder')->name('orders.respond');
    Route::resource('orders', 'OrderController');
});

Route::group(['middleware' => ['auth','admin'], 'prefix' =>'admin'], function (){
    Route::resource('clients', 'ClientController');
});

Route::group(['middleware' => ['auth','client'], 'prefix'=>'client'], function (){
    Route::get('account', 'ClientController@account')->name('client.account');
    Route::get('address', 'ClientController@address')->name('client.address');
    Route::post('account/update', 'ClientController@updateAccount')->name('client.account.update');
    Route::post('address/update', 'ClientController@updateAddress')->name('client.address.update');
    Route::get('transaction', 'ClientController@transaction')->name('client.transaction');
    Route::get('cart', 'ClientController@cart')->name('client.cart');
    Route::post('store-order', 'ClientController@storeOrder')->name('store.order');
});


