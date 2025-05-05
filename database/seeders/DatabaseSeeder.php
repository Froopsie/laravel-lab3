<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create a sample author
        $author = Author::factory()->create([
            'name' => 'John Doe',
        ]);

        // Create posts with meaningful titles and content
        $post1 = Post::factory()->for($author)->create([
            'title' => 'The Future of Technology in 2025',
            'content' => 'As we move into 2025, the pace of technological change continues to accelerate. AI, quantum computing, and green tech are reshaping every industry.',
        ]);

        $post2 = Post::factory()->for($author)->create([
            'title' => 'Exploring Canada: Top Destinations for Nature Lovers',
            'content' => 'From the towering peaks of Banff to the rugged coastline of Nova Scotia, Canada offers some of the most breathtaking natural landscapes on Earth.',
        ]);

        // Add comments with real text
        Comment::factory()->for($post1)->create([
            'commenter_name' => 'Alice',
            'comment' => 'This is so true! The pace of innovation is wild.',
        ]);

        Comment::factory()->for($post1)->create([
            'commenter_name' => 'David',
            'comment' => 'Tech is moving faster than ever.',
        ]);

        Comment::factory()->for($post2)->create([
            'commenter_name' => 'Bob',
            'comment' => 'Canada is a dream destination. Great post!',
        ]);

        Comment::factory()->for($post2)->create([
            'commenter_name' => 'Emily',
            'comment' => 'I’ve always wanted to see Banff. Thanks for sharing!',
        ]);
    }
}
