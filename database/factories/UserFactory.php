<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $facker = \Faker\Factory::create();
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$Jy/lfSJBpv0G96XmXB01VO4.Zy9wIp3oJTy.nWRgzeRwrv1QYhm2q', // password
            'remember_token' => Str::random(10),
            'address' => $this->faker->address,
            'birth_date' => $this->faker->dateTime(),
            'mobile_number' => $facker->phoneNumber,
            'national_id' => $facker->numerify('###-##-####'),
            'job_id' => 1,
        ];
    }
}