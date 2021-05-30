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
            $table->foreignId('user_id')->default(0)->comment('ИД юзера')->onDelete('cascade')->constrained('users');
            $table->foreignId('language_id')->default(0)->comment('ИД язык')->constrained('languages');
            
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
