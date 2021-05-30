<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ИД');

            $table->foreignId('master_id')->default(0)->comment('ИД текущего юзера')->onDelete('cascade')->constrained('users');
            $table->foreignId('user_id')  ->default(0)->comment('ИД юзера для переговоров')->constrained('users');
            
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
        Schema::dropIfExists('talks');
    }
}
