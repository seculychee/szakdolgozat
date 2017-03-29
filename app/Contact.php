<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	
	protected $fillable = ['firstname', 'lastname', 'language_id', 'phonenumber'];
    public function userContact()
    {
        return $this->hasMany('App\UserContact');
    }
}
