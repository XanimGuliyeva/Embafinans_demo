<?php

namespace App\Position_Categories;

use Illuminate\Database\Eloquent\Model;

class Position_Categories extends Model
{
    protected $table = 'position_categories';
    protected $fillable = ['category'];
}
