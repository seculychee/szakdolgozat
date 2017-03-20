<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['name', 'space' ];

    public function classadd()
    {
        return $this->belongsToMany(Address::class, 'address_classrooms', 'classroom_id', 'address_id');
    }

    public function roombook()
    {
    	return $this->hasmany(Book::class,'classroom_id');
    } 


}
