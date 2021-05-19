<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selected_users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ИД');
            $table->integer('id_master')->default(0)->comment('ИД текущего юзера');
            $table->integer('id_user')->default(0)->comment('ИД юзера для переговоров');
            $table->integer('id_status')->default(0)->comment('ИД статуса переговоров');
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
        Schema::dropIfExists('selected_users');
    }
}
