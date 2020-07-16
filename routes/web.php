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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::middleware('auth', 'isAdmin')->namespace('admin')->group(function(){
    /*-- Admin --*/
    Route:: get('admin/users', "UsersController@index")->name('admin.users');
    Route::get('admin/user/{id}', 'UsersController@getUser')->name('admin.user');
    Route::get('admin/customers', "DashboardController@index")->name('admin.index');
    Route::get('admin/customers', 'CustomersController@index')->name('admin.customers');
    Route::get('admin/customer/{id}', 'CustomersController@getCustomer')->name('admin.customer');
    Route::get('admin/customer/{id}', 'DashboardController@getCustomer')->name('admin.index');
    Route::get('admin/orders', 'OrdersController@index')->name('admin.orders');
    Route::get('admin/createorders', 'CreateOrderController@index')->name('admin.createorders');
    Route::get('admin/getEmail/{id}', 'CreateOrderController@getEmail');
    Route::get('admin/getPhone/{id}', 'CreateOrderController@getPhone');
    Route::get('admin/getAddress/{id}', 'CreateOrderController@getAddress');
    Route::get('admin/getCity/{id}', 'CreateOrderController@getCity');
    Route::get('admin/getState/{id}', 'CreateOrderController@getState');
    Route::get('admin/getZip/{id}', 'CreateOrderController@getZip');
    Route::get('admin/getColor/{id}', 'CreateOrderController@getColor');
    Route::get('admin/getSize/{device_id}', 'CreateOrderController@getSize');
    Route::get('admin/getMSIN/{carrier_id}', 'CreateOrderController@getMSIN');
    Route::get('admin/autocomplete', 'CreateOrderController@autocomplete');
    Route::get('admin/invoice', 'InvoiceController@invoice')->name('admin.invoice');

    Route::post('admin/users/store', 'UsersController@store')->name('admin.users.store');
    Route::post('admin/customers/store', 'CustomersController@store')->name('admin.customers.store');
    Route::post('admin/orders/store', 'OrdersController@store')->name('admin.orders.store');

    Route::put('admin/user/update', 'UsersController@update')->name('admin.user.update');
});

Route::middleware('auth','isManager')->namespace('manager')->group(function(){
    Route::get('manager/users', "UsersController@index")->name('manager.users');
});
Route::get('/home', 'HomeController@index')->name('home');
