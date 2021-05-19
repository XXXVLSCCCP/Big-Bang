<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talk', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ИД');
            $table->integer('id_master')->default(0)->comment('ИД текущего юзера');
            $table->integer('id_user')->default(0)->comment('ИД юзера для переговоров');
            $table->text('mess')->nullable()->comment('Сообщение');
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
        Schema::dropIfExists('talk');
    }
}
