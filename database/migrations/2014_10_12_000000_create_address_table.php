<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * --------------------------------------------------------------
     * |                address - Cím
     * |    [name]          Cím megnevezése technikai mező
     * |    [hq]            Székhely jelzés (székhely minidg számlázható)
     * |    [billable]      Számla befogadó
     * |    [address]       Cím (utca, házszám)
     * |    [city]          Város
     * |    [zip]           Irányítószám
     * |    [countryCode]   Ország kód amely a Country táblából jön
     * --------------------------------------------------------------
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->boolean('hq')->nullable();
            $table->boolean('billable')->nullable();
            $table->string('address');
            $table->string('city');
            $table->integer('zip');
            $table->string('countryCode');
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
        Schema::drop('address');
    }
}
