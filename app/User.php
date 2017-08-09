<?php

namespace App;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }

    public function isAdmin()
    {
        return $this->user_type == 'admin'; 
    }

    public function isReviewer()
    {
        return $this->user_type == 'reviewer' or $this->user_type == 'admin'; 
    }
}
