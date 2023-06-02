<?php

namespace Modules\Odds\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Odd extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected static function newFactory()
    {
        return \Modules\Odds\Database\factories\OddFactory::new();
    }

    public function scopeSearch($query, $val)
    {
        return $query
        ->where('odd', 'like', '%'.$val.'%')
        ->where('ads_name', 'like', '%'.$val.'%')
        ->orWhere('users.name', 'like', '%'.$val.'%');
    }
    /**
     * This function creates odds
     */
    public static function addOdds($odd, $ads_name)
    {
        Odd::create([
            'odd' => $odd,
            'ads_name' => $ads_name,
            'user_id' => auth()->user()->id,
        ]);
    }
    /**
     * this function gets odds
     */
    public static function getOdds($search, $sortBy, $sortDirection, $perPage)
    {
        return Odd::join('users', 'users.id', 'odds.user_id')
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage, ['odds.*','users.name']);
    }
    /**
     * this function gets odds to bet 
     */
    public static function getBetOdds()
    {
        return Odd::get();
    }
}
