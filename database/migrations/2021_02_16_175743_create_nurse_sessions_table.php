<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurse_sessions', function (Blueprint $table) {
            $table->unsignedBigInteger('nurse_id');
            $table->unsignedBigInteger('session_id');
            $table->primary(['nurse_id', 'session_id']);
            $table->timestamps();
            $table->foreign('nurse_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurse_sessions');
    }
}