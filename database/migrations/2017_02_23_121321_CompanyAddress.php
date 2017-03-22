<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //company tábla létrehozás
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyname');            
            $table->string('regnr');                    
            $table->string('baan');                    
            $table->string('taxnumber');                    
            $table->integer('companyType');                    
            $table->integer('language_id');                    
            $table->timestamps();
        });
        //company address összekötö tábla
        Schema::create('company_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');            
                $table->index('company_id');            
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
        Schema::drop('companies');
        Schema::drop('company_addresses');
    }
}
