<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "adresses";
    protected $fillable = ['address', 'city', 'zip'];

    public function userAddress()
    {
        return $this->hasMany('App\AddressUser');
    }


    public function companys()
    {
        return $this->belongsToMany('Company', 'company_addresses', 'address_id', 'company_id');
    }

    public function classroom()
    {
        return $this->belongsToMany('App\Classroom', 'address_classrooms', 'address_id', 'classroom_id');
    }
}
