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
        static $nurse = 1;
        static $session = 1;
        return [
            'nurse_id' => $nurse++,
            'session_id' => $session++,
        ];
    }
}