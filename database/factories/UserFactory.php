<?php

namespace Database\Factories;

use App\Models\League;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_str' => fake()->text(),
            'name' => fake()->firstName(),
            'screen_name' => fake()->name(),
            'description' => fake()->words($nb = 5, $asText = true),
            'followers_count' => fake()->numberBetween(100, 10000),
            'friends_count' => fake()->numberBetween(100, 10000),
            'profile_image_url' => fake()->imageUrl(width: 200, height: 200),
        ];
    }

    /**
     *
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
