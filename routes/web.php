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
    $blogs = \App\Blog::get()->take(4);
    return view('welcome', compact('blogs'));
})->name('welcome');


Route::get('/video', function () {
    return view('video');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact-us', 'PageController@contact')->name('contact-us');
Route::resource('contacts', 'ContactController');
Route::get('/about-us', 'PageController@about')->name('about-us');
Route::get('/our-services', 'PageController@service')->name('our-services');
Route::get('/setup', 'SetupController@index');
Route::get('blogs/show/{id}', 'Admin\BlogController@show')->name('blogs.show');
Route::get('quote/create', 'Admin\QuoteController@create')->name('quote.create');
Route::post('quote/store', 'Admin\QuoteController@store')->name('quote.store');


Route::group(['middleware' => ['auth','admin'], 'prefix'=>'admin', 'namespace' =>'Admin'], function (){
    Route::get('users/delete', 'UserController@destroy')->name('users.delete');
    Route::resource('users', 'UserController');
    Route::post('orders/respond', 'OrderController@respondToOrder')->name('orders.respond');
    Route::resource('orders', 'OrderController');

    Route::get('services', 'ServiceController@index')->name('services.index');
    Route::get('services/delete', 'ServiceController@destroy')->name('services.delete');
    Route::get('services/edit/{id}', 'ServiceController@edit')->name('services.edit');
    Route::post('services/store', 'ServiceController@store')->name('services.store');
    Route::post('services/update/{id}', 'ServiceController@update')->name('services.update');

    Route::get('blogs', 'BlogController@index')->name('blogs.index');
    Route::get('blogs/create', 'BlogController@create')->name('blogs.create');
    Route::get('blogs/destroy', 'BlogController@destroy')->name('blogs.destroy');
    Route::get('blogs/edit/{id}', 'BlogController@edit')->name('blogs.edit');
    Route::post('blogs/store', 'BlogController@store')->name('blogs.store');
    Route::put('blogs/update/{id}', 'BlogController@update')->name('blogs.update');


    Route::get('quote', 'QuoteController@index')->name('quote.index');
    Route::get('quote/destroy/{id}', 'QuoteController@destroy')->name('quote.destroy');
    Route::get('quote/show/{id}', 'QuoteController@show')->name('quote.show');
    Route::post('quote/respond', 'QuoteController@respondToQuote')->name('quote.respond');


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




