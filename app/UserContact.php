<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    protected $fillable = ['user_id', 'contact_id' ];
	
    protected $with = ['user','contact'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
}
