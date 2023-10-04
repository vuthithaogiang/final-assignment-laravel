<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "sid" =>"ST".$this->faker->numberBetween(100, 500),
            "name" => $this->faker->name,
            "age"=>$this->faker->numberBetween(18, 30),
            "address"=>$this->faker->text(20),
            "telephone"=>$this->faker->phoneNumber
        ];
    }
}
