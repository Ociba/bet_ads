<?php

namespace Modules\Marketiers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Auth;

class Marketier extends Model
{
    use HasFactory;

    //protected $fillable = ['user_id','name','contact'];
    protected $guarded =['id'];
    
    protected static function newFactory()
    {
        return \Modules\Marketiers\Database\factories\MarketierFactory::new();
    }
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('marketier_name', 'like', '%'.$val.'%')
        ->where('contact', 'like', '%'.$val.'%');
    }
    /**
     * This function creates marketier
     */
    public static function addMarketier($marketier_name, $contact)
    {
        Marketier::create([
            'marketier_name' => $marketier_name,
            'contact' => $contact,
            'user_id' => auth()->user()->id,
        ]);
    }
    /**
     * this function gets odds
     */
    public static function getMarketier($search, $sortBy, $sortDirection, $perPage)
    {
        return Marketier::join('users', 'users.id', 'marketiers.user_id')
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage, ['marketiers.*']);
    }
}
