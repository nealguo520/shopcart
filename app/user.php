<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class user extends Model implements AuthenticatableContract
{
    use Authenticatable, CanResetPassword;

    protected  $fillable = [
        'email','password',
    ];
    protected  $hidden = [
        'password','remember_token',
        ];

}
