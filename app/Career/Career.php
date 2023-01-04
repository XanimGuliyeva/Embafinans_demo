<?php

namespace App\Career;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career';
    protected $fillable = ['header','city','deadline','content'];
}
