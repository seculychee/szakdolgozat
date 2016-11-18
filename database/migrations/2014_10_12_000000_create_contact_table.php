<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
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
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->string('languageCode');
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
        Schema::drop('contact');
    }
}
