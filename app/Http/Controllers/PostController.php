<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        $categories = Category::all();
        return view("posts", ["posts" => $posts, "categories" => $categories]);


    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Post $post)
    {
        return view("singlePost", ["post" => $post]);

    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
