<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use phpDocumentor\Reflection\Location;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        $categories = Category::all();
        return view("post.posts", ["posts" => $posts, "categories" => $categories]);


    }
    public function create()
    {
        $category=Category::get();

        return view('post.createpost',['categories'=>$category]);


    }

    public function store(Request $request)
    {

        $request->validate([
                "title"=>["required","min:3"],
                "body"=>["required","min:3"],
                "excerpt"=>["required","min:3"],
                "slug"=>["required","min:3"]

            ]
            ,[
                "title.required"=>"Error .. Title is required",
                "slug.required"=>"Error .. slug is required",
                "excerpt.required"=>"Error .. excerpt is required",
                "body.required"=>"Error .. Description is required"
            ]
        );
        Post::create([
            'title'=> $request->title,
            'excerpt'=> $request->excerpt,
            'slug'=> $request->slug,
            'body'=> $request->body,
            'category_id'=> $request->category,
            'created_at'=> $request->created_at,
            'updated_at'=> $request->updated_at,
            'user_id'=>Auth::id()
        ]);
        return redirect("/posts");

    }

    public function addingComment(Request $request){
        Comment::create([
           'body'=>$_GET['body'],
           'user_id'=>Auth::id(),
           'post_id'=> $_GET['id']
        ]);

        $id=      strval($_GET['id']);

    return redirect('posts/'.$id );
    }
    public function show(Post $post)
    {
        return view("post.singlePost", ["post" => $post]);

    }

    public function profile()
    {

        return view('profile');
    }
    public function updatedinfo(Request $request)
    {
if($request->hasFile('image')){

    $filename=$request->image->getClientOriginalName();
    $request->image->storeAs('images',$filename,'public');
    $query = User::find(Auth::user()->id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'avatar'=>$filename

    ]);
    return redirect('profile');
}else{
    echo 'bad';

}


    }
    public function edit($id)
    {
        $post= Post::where("id","=", $id)->first();
        return view("post.edit",["post"=>$post,

        ]);
    }

    public function update(StorePostRequest $request, $id)
    {

        $post= Post::where("id","=", $id)->first();

        $post->title=$request->title;
        $post->excerpt=$request->excerpt;
        $post->slug=$request->slug;

        $post->body=$request->body;
        // $post->user_id=$request->user_id;
        $post->save();
        return redirect("/posts");
    }

    public function destroy($id)
    {
        $post =Post::find($id);

        $post->delete();
        return redirect("/posts");

    }
}
