<?php

namespace Database\Factories;

use App\Models\NurseSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class NurseSessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NurseSession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $facker = \Faker\Factory::create();
        return [
            'nurse_id' => $facker->numberBetween(1, 5),
            'session_id' => $facker->numberBetween(6, 10),
        ];
    }
}