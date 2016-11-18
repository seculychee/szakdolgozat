<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactCompanyLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * --------------------------------------------------------------
     * |                ContactCompanyLink - Névjegy Cég összeköttetés
     * |    [contact_id]    Névjegy azonosító   {contact}
     * |    [company_id]    Cég azonosító       {company}
     * --------------------------------------------------------------
     */
    public function up()
    {
        Schema::create('contactCompanyLink', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contact_id');
                $table->index('contact_id');
            $table->integer('company_id');
                $table->index('company_id');
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
        Schema::drop('contactCompanyLink');
    }
}
