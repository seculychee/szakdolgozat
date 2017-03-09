<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable = ['name', 'regnr', 'language_id', 'companyType' ];
       
    public function sites()
    {
        return $this->belongsToMany('App\Address', 'company_addresses', 'company_id', 'address_id');
    }

    public function userAddress()
    {
        return $this->hasMany('App\CompanyAddress');
    }
        public function CompanyType()
    {
        return $this->hasMany('App\CompanyType');
    }
    public function Language()
    {
        return $this->hasMany('App\Language');
    }



}
