<?php

namespace App\Partners;

use Illuminate\Database\Eloquent\Model;

class Partner_cat extends Model
{
    protected $table = 'partner_cat';
    protected $fillable = ['category'];
}
