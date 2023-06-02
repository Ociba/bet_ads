<?php

namespace Modules\Commission\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commission extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected static function newFactory()
    {
        return \Modules\Commission\Database\factories\CommissionFactory::new();
    }
    public function scopeSearch($query, $val)
    {
    return $query
        ->where('commission', 'like', '%'.$val.'%')
        ->orWhere('users.name', 'like', '%'.$val.'%');
    }
    /**
     * this function gets all specific marketier commission  
     */
    public static function getCommission($search, $sortBy, $sortDirection, $perPage)
    {
        return Commission::join('users', 'users.id', 'commissions.client_id')
        // ->join('marketiers', 'marketiers.id', 'commissions.marketier_id')
        // ->join('clients','clients.id','commissions.marketier_id')
        ->where('commissions.marketier_id',auth()->user()->id)
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage, ['commissions.*','users.name']);
    }
    /**
     * this function gets all specific marketier commission  
     */
    public static function getCommissionSum()
    {
        return Commission::join('users', 'users.id', 'commissions.client_id')
        //->join('marketiers', 'marketiers.id', 'commissions.marketier_id')
        //->join('clients','clients.id','commissions.marketier_id')
        ->where('commissions.marketier_id',auth()->user()->id)
        ->sum('commissions.commission');
    }
}
