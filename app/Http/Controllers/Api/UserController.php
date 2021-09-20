<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
class UserController extends Controller
{
    public function index()
    {

        return User::all();


    }
    public function show($id)
    {

        $posts = User::find($id)->posts;
        return UserResource::collection($posts);


    }
    public function destroy($id)
    {
        User::destroy($id);
    }
}
