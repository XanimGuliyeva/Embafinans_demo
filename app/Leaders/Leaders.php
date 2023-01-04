<?php

namespace App\Leaders;

use Illuminate\Database\Eloquent\Model;

class Leaders extends Model
{
    protected $table = 'leaders';
    protected $fillable = ['full_name','position','email_link','linkedin_link','profile'];
}
