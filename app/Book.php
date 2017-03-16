<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table ="books";
    protected $fillable = ['date', 'classroom_id', 'user' ];

    public function terem()
    {
    	return $this->belongsTo(Classroom::class);
    }
	public function userto()
	{
		return $this->belongsToMany(User::class, 'book_id', 'user_id');
	}
}
