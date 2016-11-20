<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends  Model{

    /**
     * Run the migrations.
     *
     * @return void
     * --------------------------------------------------------------
     * |            Contact - Névjegy
     * |    [firstName]             Keresztnév
     * |    [lastName]              Vezetéknév
     * |    [email]                 Email
     * |    [phone]                 Telefonszám
     * |    [languageCode]          Elsődleges beszélt nyelv    {language}
     * |
     * --------------------------------------------------------------
     */
    protected $table = "contact";
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'languageCode',
    ];
    public function languageName(){
        return $this->hasOne('\App\Language','code','languageCode');
    }
    public function address(){
        return 0;
    }
    public function company(){
        return 0;
    }
}
