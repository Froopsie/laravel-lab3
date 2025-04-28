<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use Database\Factories\PostFactory;
use Database\Factories\CommentFactory;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Author::factory()
            ->count(5)
            ->has(
                PostFactory::new()
                    ->count(3)
                    ->has(
                        CommentFactory::new()->count(2)
                    )
            )
            ->create();
    }
}
