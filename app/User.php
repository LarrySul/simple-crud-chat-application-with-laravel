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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    // test of mutators, mutators start with set 
    public function setNameAttribute($value)
    {
        $this-> attributes['name'] = ucfirst($value);
    }
    public function setPasswordAttribute($value)
    {
        $this-> attributes['password'] = bcrypt($value);
    }
    // test of accessors start with get

    public function getNameAttribute($value)
    {
        return "". $value;
        return strtoupper($value);
    }
    //  public function getEmailAttribute($value)
    // {
    //     return strtok($value,'@');
    // }
}

