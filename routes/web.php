<?php

use App\Http\Controllers\RequestsController;
use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get("users/{user:username}", function (User $user) {
    // $post= Post::find($id);
    return view("SingleUserPosts", ["user" => $user]);
});
Route::get('addfriend{id}',function ($id){
$friend=new Friend();
    $friend->addFriend($id);
return back();
})->middleware('auth');
Route::get("users", function () {
    $users = User::get();
    $friends=Friend::get();
    return view("users", ["users" => $users , "friends"=>$friends]);
})->middleware('auth');
Route::resource('requests',RequestsController::class);
Route::get("profile", [PostController::class,'profile']);
Route::post('admin',[PostController::class,'updatedinfo'])->name('adminUpdateInfo');
Route::get('friendsrequests',function (){
   $requests= Friend::where('user_id',Auth::id())->where('isfriend',0)->where('request',1)->get() ;

    return view('friends_requests',['requests'=>$requests]);
});
Route::get('DeleteRequest{id}',function ($id){

    $accept=new Friend();
    $accept->deleteRequest($id);
    $requests= Friend::where('user_id',Auth::id())->where('isfriend',0)->where('request',1)->get();
    return view('friends_requests',['requests'=>$requests ]);
});
Route::get('acceptRequest{id}',function ($id){

  $accept=new Friend();
  $accept->acceptrequest($id);
    $requests= Friend::where('user_id',Auth::id())->where('isfriend',0)->where('request',1)->get();
    return view('friends_requests',['requests'=>$requests]);
});
Route::resource('posts',PostController::class)->middleware('auth');
Route::get("categories/{id}", function (Category $id) {
    return view(
        "categories",
        [
            "category" => $id,
            "categories" => Category::all(),
        ]
    );
});
Route::get('addingComment',[PostController::class,'addingComment']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home')->middleware('auth');

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home')->middleware('auth');
