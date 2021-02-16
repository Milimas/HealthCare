<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');                                                           // * First Name
            $table->string('last_name');                                                            // * Last Name
            $table->string('national_id');                                                          // * Social Security Number
            $table->string('address');                                                              // * Address
            $table->date('birth_date');                                                             // * Birth Date
            $table->string('mobile_number');                                                        // * Patient Mobile Number
            $table->string('second_mobile_number');                                                 // * Relative or Friend's Mobile Number
            $table->unsignedBigInteger('doctor');                                                      // * User ID in Charge
            $table->timestamps();
            $table->foreign('doctor')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}