<?php

namespace App\Mission;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $table = 'mission';
    protected $fillable = ['content'];
}
