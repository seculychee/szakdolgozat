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

    /*public function books()
    {
    	return $this->hasMany('App\Book');
    } */
    public function roombook()
    {
    	return $this->hasmany(Book::class,'classroom_id');
    } 


}
