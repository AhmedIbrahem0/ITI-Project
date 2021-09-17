<?php

use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\PostController;

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

Route::get("users/{user:username}", function (User $user) {
    // $post= Post::find($id);
    return view("SingleUserPosts", ["user" => $user]);
});
Route::get("users", function () {
    $users = User::get();
    return view("users", ["users" => $users]);
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
