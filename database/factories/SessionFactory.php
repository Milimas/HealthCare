<?php

namespace Database\Factories;

use App\Models\Session;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Session::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $facker = \Faker\Factory::create();
        return [
            'date' => $this->faker->dateTime(),
            'patient_id' => $facker->numberBetween(1, 10),
            'title' => $facker->sentence,
            'report' => $facker->paragraphs($nb = 3, $asText = true),
        ];
    }
}