<?php

namespace App\About;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = ['content','employee','credit','portfolio','partner'];
}
