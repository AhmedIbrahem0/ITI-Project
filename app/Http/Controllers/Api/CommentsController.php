<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentsResource;
use App\Http\Resources\UserResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function index()
    {
        $comment = Comment::all();


        return $comment;
        //return PostResource::collection($posts);


    }
    public function show($id)
    {
        $comment = Post::find($id)->comments;
        return CommentsResource::collection($comment);

    }
    public function destroy($id)
    {
        Post::destroy($id);
    }
}
