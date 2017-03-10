<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable = ['name', 'regnr', 'baan','language_id', 'companyType' ];
       
    public function sites()
    {
        return $this->belongsToMany(Address::class, 'company_addresses', 'company_id', 'address_id');
    }

    public function userAddress()
    {
        return $this->hasMany(CompanyAddress::class);
    }
        public function CompanyType()
    {
        return $this->hasMany(CompanyType::class);
    }
    public function Language()
    {
        return $this->hasMany(Language::class);
    }



}
