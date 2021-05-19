<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_languages', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ИД');
            $table->integer('id_user')->default(0)->comment('ИД юзера');
            $table->integer('id_language')->default(0)->comment('ИД язык');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_languages');
    }
}
