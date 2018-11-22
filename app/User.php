<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',"gender","phone", 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cart()
    {
        return $this->hasMany("App\Cart",'user_id','id');
    }

    public function address()
    {
       return $this->hasMany("App\Address",'user_id',"id");
    }

    public function payments()
    {
       return $this->hasMany("App\Payment",'user_id','id');
    }

    public function orders()
    {
       return $this->hasMany("App\Order",'user_id','id');
    }
}
