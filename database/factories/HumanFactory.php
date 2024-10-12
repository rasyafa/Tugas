<?php

namespace Database\Factories;

use App\Models\Human;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Human>
 */
class HumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');

        return [
            "name" => $faker->name(),
            "age" => $faker->numberBetween(18, 60),
            "gender" => $faker->randomElement(["Male", "Female"]),
        ];
    }
}
