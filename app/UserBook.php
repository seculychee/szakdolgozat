<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBook extends Model
{
    protected $fillable=['user_id', 'book_id', 'participate'];
}
