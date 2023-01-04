<?php

namespace App\Products;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','about','choice','value','term','image','min_amount','max_amount','monthly_payment','min_term','max_term','annual_rate','FIFD','commission','payment_form','financing','age','bail','documents','informations','content','category'];
}
