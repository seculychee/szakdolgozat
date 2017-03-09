<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
     protected $fillable = ['code', 'displayName', 'cultureCode', 'iso639xValue'];
    public function Company()
    {
        return $this->hasMany('App\Company');
    }
}
