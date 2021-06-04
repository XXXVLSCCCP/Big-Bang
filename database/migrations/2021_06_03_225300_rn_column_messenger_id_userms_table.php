<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RnColumnMessengerIdUsermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userms', function (Blueprint $table) {
			$table->dropColumn('messanger_id');
			$table->integer('messenger_id')->nullable()->comment('ИД мессенджера ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userms', function (Blueprint $table) {
            //
        });
    }
}
