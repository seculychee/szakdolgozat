<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends  Model{

    /**
     * Run the migrations.
     *
     * @return void
     * --------------------------------------------------------------
     * |            Language - Nyelvek
     * |    [code]          Ez kerül letárolásra a Contact,Company,Category,Vendor,Product táblákon
     * |    [displayName]   Megjelenítési szöveg nyelv-ország
     * |    [cultureCode]   Kulturális hexa kód
     * |    [iso639xValue]  Iso kód
     * --------------------------------------------------------------
     */
    protected $table = "language";
    protected $fillable = [
        'code',
        'displayName',
        'cultureCode',
        'iso639xValue',
    ];

}
