<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //contact table -> firstname, lastname
       Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');            
            $table->string('lastname');                    
            $table->integer('language_id');                    
            $table->timestamps();
        });

       //kapcsoló tábla contacts+user
       Schema::create('user_contacts', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name');
            $table->integer('user_id');            
                $table->index('user_id');            
            $table->integer('contact_id');                    
                $table->index('contact_id');                    
            $table->timestamps();
        });

        //adress table -> address city zip countryCode
       Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');            
            $table->string('city');                    
            $table->integer('zip');                    
            //$table->integer('countryCode');                    
            $table->timestamps();
        });

       //kapcsoló tábla users+address
       Schema::create('adress_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');            
                $table->index('user_id');            
            $table->integer('address_id');                    
                $table->index('address_id');                    
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
        Schema::drop('contacts');
        Schema::drop('user_contacts');
        Schema::drop('adresses');
        Schema::drop('adress_users');
    }
}
