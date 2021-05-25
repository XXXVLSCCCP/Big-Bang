<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RnColumnTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talks', function (Blueprint $table) {
			$table->dropColumn('selected_user_id');
			$table->integer('contacts_id')->default(0)->comment('ИД контакта');
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
