<?php

namespace Modules\Clients\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Deposit extends Model
{
    use HasFactory;

    //protected $fillable = [''];
    protected $guarded=['id'];
    
    protected static function newFactory()
    {
        return \Modules\Clients\Database\factories\DepositFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('total_odds', 'like', '%'.$val.'%')
        ->where('amount', 'like', '%'.$val.'%') 
        ->where('amount_withdrawn', 'like', '%'.$val.'%')
        ->where('date_of_withdraw', 'like', '%'.$val.'%')
        ->where('status', 'like', '%'.$val.'%')
        ->orWhere('users.name', 'like', '%'.$val.'%');
    }
    /**
     * This function places deposit of money from the client
     */
    public static function addDeposit($total_odds, $amount)
    {
        Deposit::create([
            'total_odds' => $total_odds,
            'amount'     => $amount,
            'status'     =>'active',
            'user_id' => auth()->user()->id,
        ]);
    }
    /**
     * this function gets deposit
     */
    public static function getDeposit($search, $sortBy, $sortDirection, $perPage)
    {
        return Deposit::join('users', 'users.id', 'deposits.user_id')
        ->where('users.id',auth()->user()->id)
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage, ['deposits.*','users.name']);
    }
    /**
     * This function gets all withdraws for the client
     */
    public static function clientsWithdraws($search, $sortBy, $sortDirection, $perPage){
        return Deposit::join('users', 'users.id', 'deposits.user_id')
        ->where('users.id',auth()->user()->id)
        ->where('deposits.status','withdrawn')
        ->whereNotNull('amount_withdrawn',)
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage, ['deposits.*','users.name']);
    }
    /**
     * This function creates amount withdrawn by a particular client
     */
    public static function withdrawAmountBetted($withdraw_id, $amount_withdrawn, $date_of_withdraw)
    {
        Deposit::whereId($withdraw_id)->update([
            'amount_withdrawn' => $amount_withdrawn,
            'date_of_withdraw' => Carbon::now(),
            'status'           => 'withdrawn'
        ]);
    } 
    /**
     * this function gets deposit for the Admin
     */
    public static function deposits($search, $sortBy, $sortDirection, $perPage)
    {
        return Deposit::join('users', 'users.id', 'deposits.user_id')
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage, ['deposits.*','users.name']);
    }
    /**
     * This function creates amount withdrawn by a particular client
     */
    public static function allWithdraws($search, $sortBy, $sortDirection, $perPage){
        return Deposit::join('users', 'users.id', 'deposits.user_id')
        ->where('deposits.status','withdrawn')
        ->whereNotNull('amount_withdrawn',)
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage, ['deposits.*','users.name']);
    }
}
