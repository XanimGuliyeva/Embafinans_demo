<?php

namespace App\ContactInfo;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contact_info';
    protected $fillable = ['address','phone','fax','hotline','email'];
}
