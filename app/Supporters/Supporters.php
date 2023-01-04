<?php

namespace App\Supporters;

use Illuminate\Database\Eloquent\Model;

class Supporters extends Model
{
    protected $table = 'supporters';
    protected $fillable = ['name','city','address','category','phone','about','contact_person','email','website','director','contact_phone','status','image','content'];
}
