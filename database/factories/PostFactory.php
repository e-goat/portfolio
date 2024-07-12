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
        $paragraphsCount = range(0, 5);
        $title      = $this->faker->realText(50);
        $content    = '';

        foreach ($paragraphsCount as $idx) {
            $paragraph = $this->faker->realText(1000);
            $content .= "<p>{$paragraph}</p>";
        }

        return [
            'title' => $title,
            'content' => $content,
            'slug' => $this->faker->slug,
            'user_id' => \App\Models\User::all()->random()->id,
        ];
    }
}
