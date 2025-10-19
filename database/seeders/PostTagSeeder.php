<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostTagSeeder extends Seeder
{
    public function run(): void
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            $tags = Tag::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $post->tags()->syncWithoutDetaching($tags);
        }
    }
}
