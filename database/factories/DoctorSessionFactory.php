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
        static $doctor = 1;
        static $session = 1;
        return [
            'doctor_id' => $doctor++,
            'session_id' => $session++,
        ];
    }
}