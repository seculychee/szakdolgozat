<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
     protected $fillable = ['code', 'displayName', 'cultureCode', 'iso639xValue'];

        public function company()
    {
    	return $this->hasmany(Company::class,'language_id');
    } 
}
