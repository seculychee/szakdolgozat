<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "address";
    public $timestamps = false;
    protected $fillable = [
        'varos',
        'utca',
        'irsz',
        'tel',
    ];
}