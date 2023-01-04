<?php

namespace App\Offers;

use Illuminate\Database\Eloquent\Model;

class OfferCat extends Model
{
    protected $table = 'offer_categories';
    protected $fillable = ['name','about','percent'];
}
