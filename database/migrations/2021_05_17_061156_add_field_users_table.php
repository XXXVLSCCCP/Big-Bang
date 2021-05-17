<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_name', 60)->nullable()->comment('Имя');
            $table->string('foto',60)->nullable()->comment('Фото');
			$table->integer('id_language')->default(0)->comment('ИД родной язык');
			$table->date('birthdate')->format('d.m.Y')->nullable()->comment('Дата рождения');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id_language');
			$table->dropColumn('user_name');
			$table->dropColumn('foto');
			$table->dropColumn('birthdate');
        });
    }
}
