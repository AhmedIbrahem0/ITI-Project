<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

use function PHPUnit\Framework\fileExists;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("posts/{post}",function(Post $post){
   // $post= Post::find($id);
return view("singlePost",["post"=>$post]);
});
Route::get("users/{user:username}",function(User $user){
   // $post= Post::find($id);
return view("SingleUserPosts",["user"=>$user]);
});
Route::get("users",function( ){
   $users= User::get();
return view("users",["users"=>$users]);
});
Route::get("/",function(){
     
      return view("post");
 });
Route::get("posts",function(){
     
  $posts=Post::latest()->get();
     return view("posts",["posts"=>$posts]);
});
Route::get("categories/{id}",function(Category $id){
    
   // $category=Category::where('id',"=",$id)->first() ;
  
   return view("categories",["category"=>$id]);
});
// Route::get("posts/{post}",function($post){
//     $path=__DIR__."/../resources/Posts/{$post}.html";
   
//     if(file_exists($path)){
        
//        $cached=cache()->remember("posts.{$post}",5,
//        fn()  => file_get_contents($path)
//          );
//         $content=file_get_contents($path);
//         return view("singlePost",["post"=>$content]);

//     }else{
//         abort(404);
//     }
// })->where('post','[A-z]+');
