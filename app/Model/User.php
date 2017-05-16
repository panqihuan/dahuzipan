<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    protected $table = 'user';

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

    public function __set($key, $value) {
        if($key == 'password'){
            $value = Hash::make($value);
        }
        $this->setAttribute($key, $value);
    }

    public function isAdmin()
    {
        return $this->type == 0 ? true : false;
    }
}
