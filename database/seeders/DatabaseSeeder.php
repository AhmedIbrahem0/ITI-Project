<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Post::factory(3)->create();
        Category::factory(3)->create();
        $user=User::factory()->create();
        Post::factory(3)->create([
            'user_id'=> $user->id
        ]);

        Comment::factory(10)->create();
    }
}
