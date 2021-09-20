<?php
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CommentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/posts",[PostController::class,"index"]);
Route::get("/posts/{id}",[PostController::class,"show"]);
Route::delete("/posts/{id}",[PostController::class,"destroy"]);
Route::get("/users",[UserController::class,"index"]);

Route::get("/users/{id}",[UserController::class,"show"]);
Route::delete("/users/{id}",[UserController::class,"destroy"]);
Route::get("/comments",[CommentsController::class,"index"]);

Route::get("/comments/{id}",[CommentsController::class,"show"]);
Route::delete("/comments/{id}",[CommentsController::class,"destroy"]);
