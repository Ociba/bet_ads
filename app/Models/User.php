<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'user_type',
        'loggedin_marketier_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    //Tis function searches by any of this fields
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('name', 'like', '%'.$val.'%')
        ->orWhere('email', 'like', '%'.$val.'%')
        ->orWhere('user_types.types', 'like', '%'.$val.'%');
    }
    /**
     * this function gets all users
     */
    public static function getUsers($search, $sortBy, $sortDirection, $perPage)
    {
        return User::join('user_types','user_types.id','users.user_type')
        ->search($search)
        ->orderBy($sortBy, $sortDirection)
        ->paginate($perPage,['users.*','user_types.types']);
    }
    /**
     * this function gets loggedin user type 
     */
    public static function getLoggedinUserType()
    {
        return User::join('user_types','user_types.id','users.user_type')
        ->where('users.id',auth()->user()->id)->value('user_types.types');
    }
}
