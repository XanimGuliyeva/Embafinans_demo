<?php

namespace App\Branches;

use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    protected $table = 'branches';
    protected $fillable = ['name','address','phone','city','latitude','longitude'];
}
