<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DelConstrUserIdTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('talks', function (Blueprint $table) {
            $table->dropForeign('talks_master_id_foreign');
			$table->dropForeign('talks_selected_user_id_foreign');
			$table->dropForeign('talks_user_id_foreign');

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
			$table->foreignId('master_id')->comment('ИД текущего юзера')->onDelete('cascade')->constrained('users');
			$table->foreignId('user_id')  ->comment('ИД юзера для переговоров')->constrained('users');
        });
    }
}
