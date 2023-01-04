<?php

namespace App\Finance;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $table = 'finance';
    protected $fillable = ['header','content'];
}
