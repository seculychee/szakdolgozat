<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressUser extends Model
{
    
   protected $fillable = ['address_id', 'user_id' ];
	
    protected $with = ['user','address'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function address()
    {
        return $this->belongsTo('App\Address');
    }
}
