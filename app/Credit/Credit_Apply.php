<?php

namespace App\Credit;

use Illuminate\Database\Eloquent\Model;

class Credit_Apply extends Model
{
    protected $table = 'credit_apply';
    protected $fillable = ['purpose','about','term','monthly_payment','long_name','address','register_address','birthday','organization','work_term','monthly_salary','home_phone','mobile_phone','work_phone','email'];
}
