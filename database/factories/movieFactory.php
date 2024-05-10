<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\text;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class movieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->sentence(1),
            'production'=>fake()->sentence(1),
            'geners_id'=> \App\Models\Geners::factory(),
            'director'=>fake()->sentence(1),
            'duraction'=>fake()->randomNumber(1),
            'rate'=>fake()->sentence(1),
            'name'=>fake()->sentence(5),
            'production'=>fake()->sentence(5),
            'geners_id'=> \App\Models\Geners::factory(),
            'director'=>fake()->sentence(5),
            'duraction'=>fake()->randomNumber(5),
            'rate'=>fake()->sentence(5),
            'cover'=>fake()->image(),
            'video'=>fake()->image(),
        ];
    }
}
