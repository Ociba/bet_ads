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

Route::group(['prefix' => 'clients', 'middleware' => ['auth']], function () {
    Route::get('/', 'ClientsController@index');
    Route::get('/my-deposit', 'ClientsController@getMyDeposit')->name('My Deposits'); 
    Route::get('/transaction', 'ClientsController@transactions')->name('My Transactions');
    Route::get('/withdraw/{withdraw_id}', 'ClientsController@withdrawNow')->name('Withdraws');
});
