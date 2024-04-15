<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name' => fake()->name(),
            // 'email' => fake()->unique(),->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => static::$password  ??= Hash:
            // 'remember_token' => Str:random(10),
            'isbn' => $this->faker->unique()->isbn10,
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name,
            'description' => $this->faker->paragraph(3),
            'date_published' => $this->faker->date(),
        ];
    }
}
