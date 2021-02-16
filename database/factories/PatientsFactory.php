<?php

namespace Database\Factories;

use App\Models\Patients;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patients::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $facker = \Faker\Factory::create();
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'address' => $this->faker->address,
            'birth_date' => $this->faker->dateTime(),
            'mobile_number' => $facker->phoneNumber,
            'second_mobile_number' => $facker->phoneNumber,
            'national_id' => $facker->numerify('###-##-####'),
            'doctor' => $facker->numberBetween(1, 10),
        ];
    }
}