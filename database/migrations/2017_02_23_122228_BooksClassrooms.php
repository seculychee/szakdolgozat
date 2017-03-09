<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BooksClassrooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //cím kapcsolása a címhez
        Schema::create('address_classrooms', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name');
            $table->integer('address_id');            
                $table->index('address_id');            
            $table->integer('classroom_id');                    
                $table->index('classroom_id');                    
            $table->timestamps();
        });

        // classroom -> terem név, férőhely
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');            
            $table->integer('space');                                      
            $table->timestamps();
        });

        // books -> foglalások 
        //tartalma: id, datetime, classroom_id
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');            
            $table->integer('classroom_id');                                      
            $table->timestamps();
        });

        // user + foglalás összekapcsolás itt törénik majd az összeszámolás hányan jelentkeztek melyik órára 
        Schema::create('user_books', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name');
            $table->integer('user_id');            
                $table->index('user_id');            
            $table->integer('book_id');                    
                $table->index('book_id');                    
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
        Schema::drop('address_classrooms');
        Schema::drop('classrooms');
        Schema::drop('books');
        Schema::drop('user_books');
    }
}
