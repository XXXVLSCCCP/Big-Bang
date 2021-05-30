<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RnColumnMasterIdTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talks', function (Blueprint $table) {
			$table->dropColumn('master_id');
			$table->dropColumn('user_id');
			$table->integer('user1_id')->default(0)->comment('ИД юзер1 ');
			$table->integer('user2_id')->default(0)->comment('ИД юзер2 ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('talks', function (Blueprint $table) {
            //
        });
    }
}
