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
            $table->foreignId('master_id')->default(0)->comment('ИД текущего юзера')->onDelete('cascade')->constrained('users');
            $table->foreignId('user_id')  ->default(0)->comment('ИД юзера для переговоров')->constrained('users');
            $table->foreignId('status_id')->default(0)->comment('ИД статуса для переговоров')->constrained('select_status');
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
