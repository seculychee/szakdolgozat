<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactAddressLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     * --------------------------------------------------------------
     * |                CompanySiteLink - Cég - Telephely kapcsolat
     * |    [company_id]    Cég id      {company}
     * |    [site_id]       Telephely id{site}
     * |        Ezen a táblán keresztül kapcsolódik a cég és a telpehlye
     * --------------------------------------------------------------
     */
    public function up()
    {
        Schema::create('contactAddressLink', function (Blueprint $table) {
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
        Schema::drop('contactAddressLink');
    }
}
