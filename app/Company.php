<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable = ['companyname', 'regnr', 'baan','taxnumber','language_id', 'companytype_id' ];
       
    public function sites()
    {
        return $this->belongsToMany(Address::class, 'company_addresses', 'company_id', 'address_id');
    }

    public function userAddress()
    {
        return $this->hasMany(CompanyAddress::class);
    }
        public function companytype()
    {
        return $this->belongsTo(CompanyType::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }




}
