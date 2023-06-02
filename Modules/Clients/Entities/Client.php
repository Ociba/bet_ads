<?php

namespace Modules\Clients\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected static function newFactory()
    {
        return \Modules\Clients\Database\factories\ClientFactory::new();
    }
    public function scopeSearch($query, $val)
    {
    return $query
        ->where('client_name', 'like', '%'.$val.'%')
        ->where('phone_number', 'like', '%'.$val.'%')
        ->where('clients_email', 'like', '%'.$val.'%')
        ->orWhere('users.name', 'like', '%'.$val.'%');
    }
    /**
     * The marketier adds his or her client
     */
    public static function addClient($client_name, $clients_email, $phone_number)
    {
        Client::create([
            'client_name'  => $client_name,
            'clients_email' =>$clients_email,
            'phone_number' => $phone_number,
            'user_id' => auth()->user()->id,
        ]);
    }
    /**
     * this function gets clients for the specific marketier
     */
    public static function getClient($search, $sortBy, $sortDirection, $perPage)
    {
        return Client::join('users', 'users.id', 'clients.user_id')
        ->where('users.id',auth()->user()->id)
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage, ['clients.*','users.email','users.name']);
    }
}
