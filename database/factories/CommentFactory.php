<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'commenter_name' => $this->faker->name(),
            'comment' => $this->faker->sentence(),
        ];
    }
}
