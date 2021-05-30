<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RnTalksUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
	    
        Schema::table('selected_users', function (Blueprint $table) {
            $table->dropForeign('selected_users_master_id_foreign');
			$table->dropForeign('selected_users_status_id_foreign');
			$table->dropForeign('selected_users_user_id_foreign');
        });
		Schema::rename('selected_users', 'contacts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('contacts','selected_users');
		//Schema::table('selected_users', function (Blueprint $table) {
        //});
		
    }
}
