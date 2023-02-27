<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText($maxNbChars = 40, $indexSize = 1),
            'email' => fake()->unique()->safeEmail(),
            'image' => fake()->imageUrl(640, 480, 'cats'),
        ];
    }
}
