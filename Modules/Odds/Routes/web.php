<?php

use Illuminate\Support\Facades\Route;
use Modules\Odds\Http\Controllers\AddedOdssController;
use Modules\Odds\Http\Controllers\BalanceController;
use Modules\Odds\Http\Controllers\DepositController;
use Modules\Odds\Http\Controllers\OddsController;
use Modules\Odds\Http\Controllers\TransactionController;

Route::prefix('odds')->group(function() {
    Route::get('/', [OddsController::class, 'index']);
    Route::get('/odds', [OddsController::class, 'odds'])->name('Odds');
    Route::get('/add-odds', [OddsController::class, 'addOdds'])->name('Create Odds');
    Route::get('/add-odds-to-session/{odd}/{id}/{ads_name}', [AddedOdssController::class, 'saveSessionData']);
    //Routes for Deposit
    Route::get('/deposit',[DepositController::class, 'getDeposit'])->name('Deposits');
    //Routes for Withdraw
    //Route::get('/withdraws','WithdrawController@getWithdraws')->name('Withdraws');

    //Routes for Withdraw
    Route::get('/balance',[BalanceController::class, 'getBalance'])->name('Balance');

    //Routes for Withdraw
    Route::get('/transaction',[TransactionController::class, 'getTransaction'])->name('Transaction');
});
