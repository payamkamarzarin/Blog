<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    protected $model = Post::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(10)->create();
    }
}
