<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{User, Post};

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id'   => function() {
                return Post::count() > 0 ? Post::all()->random()->id: function() {
                    Post::factory(100);
                    return Post::all()->random()->id;
                };
            },
            'user_id'   => function() {
                return User::count() > 0 ? User::all()->random()->id: function() {
                    User::factory(100);
                    return User::all()->random()->id;
                };
            },
            'content'     => $this->faker->paragraph,
            'approved'    => $this->faker->boolean(80),
            'approved_at' => $this->faker->dateTimeThisYear,
            'approved_by' => function() {
                return User::count() > 0 ? User::all()->random()->id: function() {
                    User::factory(100);
                    return User::all()->random()->id;
                };
            },
            'depth'          => $this->faker->numberBetween(0, 5),
            'likes_count'    => $this->faker->numberBetween(0, 10),
            'dislikes_count' => $this->faker->numberBetween(0, 10),
        ];
    }
}
