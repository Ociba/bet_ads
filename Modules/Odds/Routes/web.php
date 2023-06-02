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

Route::prefix('odds')->group(function() {  
    Route::get('/', 'OddsController@index'); 
    Route::get('/odds', 'OddsController@odds')->name('Odds');
    Route::get('/add-odds', 'OddsController@addOdds')->name('Create Odds');
    Route::get('/add-odds-to-session/{odd}/{id}/{ads_name}', 'AddedOdssController@saveSessionData');
    //Routes for Deposit
    Route::get('/deposit','DepositController@getDeposit')->name('Deposits');
    //Routes for Withdraw
    //Route::get('/withdraws','WithdrawController@getWithdraws')->name('Withdraws');

    //Routes for Withdraw
    Route::get('/balance','BalanceController@getBalance')->name('Balance');

    //Routes for Withdraw
    Route::get('/transaction','TransactionController@getTransaction')->name('Transaction');
});
