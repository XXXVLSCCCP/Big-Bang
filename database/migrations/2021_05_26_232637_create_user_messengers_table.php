<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMessengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userms', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ИД');
            $table->integer('user_id')->default(0)->comment('ИД юзер ');
			$table->integer('messanger_id')->default(0)->comment('ИД мессенджера ');
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
        Schema::dropIfExists('userms');
    }
}
