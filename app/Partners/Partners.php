<?php

namespace App\Partners;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    protected $table = 'partners';
    protected $fillable = ['name','city','address','category','phone','about','contact_person','email','website','director','contact_phone','status','image','content'];
}
