<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = ['Male', 'Female'];

        return [
            'name'         => fake()->name,
            'gender'       => $gender[rand(0, 1)],
            'phone_number' => fake()->phoneNumber(),
            'email'        => fake()->email(),
        ];
    }
}
