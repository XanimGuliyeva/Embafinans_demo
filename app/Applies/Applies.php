<?php

namespace App\Applies;

use Illuminate\Database\Eloquent\Model;

class Applies extends Model
{
    protected $table = 'applies';
    protected $fillable = ['name','surname','phone','email','cv'];
}
