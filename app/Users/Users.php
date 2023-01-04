<?php

namespace App\Users;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['fin','phone','email','code','password','rating','category'];
}
