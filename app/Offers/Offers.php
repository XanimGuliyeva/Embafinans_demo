<?php

namespace App\Offers;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $table = 'offers';
    protected $fillable = ['name','about','choice','value','image','term','content','category'];
}
