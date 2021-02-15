<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');                                                           // * First Name
            $table->string('last_name');                                                            // * Last Name
            $table->string('email')->unique();                                                      // * Email
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                                                             // * Password
            $table->rememberToken();
            $table->string('address');                                                              // * Address
            $table->date('birth_date');                                                             // * Birth Date
            $table->string('mobile_number');                                                        // * Mobile Number
            $table->string('national_id');                                                          // * Social Security Number
            $table->unsignedBigInteger('job_id');                                                   // * Position
            $table->timestamps();
            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}