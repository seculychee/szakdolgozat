<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyAddress extends Model
{
       protected $fillable = ['address_id', 'company_id' ];
	
    protected $with = ['company','address'];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function address()
    {
        return $this->belongsTo('App\Address');
    }
}
