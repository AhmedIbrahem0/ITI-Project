<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $categories = Category::all();
        return $posts;
        //return PostResource::collection($posts);


    }
    public function show($id)
    {
        return Post::find($id) ;

    }
    public function destroy($id)
    {
Post::destroy($id);
    }
}
