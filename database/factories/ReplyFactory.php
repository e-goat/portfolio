<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{User, Comment};

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_id' => function() {
                return Comment::count() > 0 ? Comment::all()->random()->id: function() {
                    Comment::factory(100);
                    return Comment::all()->random()->id;
                };
            },
            'user_id'   => function() {
                return User::count() > 0 ? User::all()->random()->id: function() {
                    User::factory(100);
                    return User::all()->random()->id;
                };
            },
            'content' => $this->faker->text,
            'approved' => false,
            'approved_at' => null,
            'approved_by' => null,
        ];
    }
}
