<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Friend;
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

        for($i =0;$i<10;$i ++){
           $user= User::factory();
           $post= Post::factory()->create(['user_id'=>$user]);
           Comment::factory()->create([
               'user_id'=>$user  ,
               'post_id'=>$post
           ]);

        }
        Category::factory(3)->create();
    }
}
