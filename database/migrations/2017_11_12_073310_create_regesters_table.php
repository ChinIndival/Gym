<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regesters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();;
            $table->integer('id_action')->unsigned();
            $table->foreign('id_action')->references('id')->on('actions');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('regesters');
    }
}
