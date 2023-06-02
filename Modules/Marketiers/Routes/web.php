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

Route::group(['prefix' => 'marketiers', 'middleware' => ['auth']], function () { 
    Route::get('/marketiers', 'MarketiersController@getMarketier')->name('Marketiers');
    Route::get('/my-clients', 'MarketiersController@getClients')->name('Clients');
    Route::get('/commission', 'MarketiersController@getCommission')->name('Commision');
});
