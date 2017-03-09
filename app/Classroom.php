<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['name', 'space' ];

        public function classadd()
    {
        return $this->belongsToMany('App\Address', 'address_classrooms', 'classroom_id', 'address_id');
    }

}
