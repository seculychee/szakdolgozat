<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    protected $fillable = ['name'];
    public function Company()
    {
    	return $this->belongsTo('App\Company');
    }
}
