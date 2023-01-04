<?php

namespace App\Supporter_cat;

use Illuminate\Database\Eloquent\Model;

class Supporter_cat extends Model
{
    protected $table = 'supporter_cat';
    protected $fillable = ['category'];
}
