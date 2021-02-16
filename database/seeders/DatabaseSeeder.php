<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Jobs::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Patients::factory(10)->create();
        \App\Models\Session::factory(10)->create();
        \App\Models\DoctorSession::factory(10)->create();
        \App\Models\NurseSession::factory(10)->create();
    }
}