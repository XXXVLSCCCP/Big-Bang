<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RnUsersLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_languages', function (Blueprint $table) {
            $table->dropForeign('users_languages_language_id_foreign');
			$table->dropForeign('users_languages_user_id_foreign');

        });
		Schema::rename('users_languages', 'userlangs');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_languages', function (Blueprint $table) {
            //
        });
    }
}
