<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * --------------------------------------------------------------
     * |                        Company - Cég
     * |    [name]                  nevét
     * |    [companyType_id]        cég tipus azonositója {companyType}
     * |    [languageCode]          A cég alapértelmezett nyelve kapcsolva {language}
     * |    [regnr]                 Cégjegyzék szám
     * |    [baan]                  Bankszámlaszám
     * --------------------------------------------------------------
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
                $table->index('name');
            $table->integer('companyType_id');
            $table->string('languageCode');
            $table->string('regnr');
                $table->unique('regnr');
            $table->string('baan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company');
    }
}
