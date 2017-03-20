<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable = ['name', 'regnr', 'baan','taxnumber','language_id', 'companytype_id' ];
       
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
        return $this->belongsTo(CompanyType::class);
    }
    public function Language()
    {
        return $this->belongsTo(Language::class);
    }




}
