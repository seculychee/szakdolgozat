<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
}
class UserData extends Model
{
    protected $table ='userdata';
    public $timestamps = false;
    protected $fillable = [
        'varos',
        'utca',
        'irsz',
        'tel'
    ];
}

    
