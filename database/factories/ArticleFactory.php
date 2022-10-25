<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // User::all();
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'Travel',
            'description' => $this->faker->paragraph(10),
            // 'user_id' => User::query()->inRandomOrder()->first()['id'],
        ];
    }

    public function randomAuthor()
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => User::query()->inRandomOrder()->first()['id'],
        ]);
    }
}
