<?php

namespace Database\Factories;

use App\Models\DoctorSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorSessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DoctorSession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $facker = \Faker\Factory::create();
        return [
            'doctor_id' => $facker->numberBetween(1, 5),
            'session_id' => $facker->numberBetween(6, 10),
        ];;
    }
}