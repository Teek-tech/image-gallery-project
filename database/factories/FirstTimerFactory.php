<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FirstTimer>
 */
class FirstTimerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = fake()->randomElement(['male', 'female']);
        $status = fake()->randomElement(['married', 'single']);
        $date = fake()->date('Y-m-d');
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->e164PhoneNumber(),
            'gender' => $gender,
            'age' => rand(18,100),
            'marital_status' => $status,
            'residence' => fake()->address(),
            'bustop' => fake()->streetName(),
            'bos_address' => fake()->address(),
            'occupation' => fake()->jobTitle(),
            'visit' =>  $date,
            'assignedTo' => rand(1,10),
            'reg_date' => date('Y-m-d'),
            
        ];
    }
}
