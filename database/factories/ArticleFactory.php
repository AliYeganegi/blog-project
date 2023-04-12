<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends Factory<\App\Models\=>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->text,
            'user_id' => $this->faker->unique()->numberBetween(1, User::count()),
//            'user_id' => User::factory(),
        ];
    }
}
