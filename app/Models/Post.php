<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $with=['author','category'];
   protected $fillable=[
       'title',
       'slug',
       'user_id',
       'category_id',
       'excerpt',
       'body'
   ];
   function author(){
       return $this->belongsTo(User::class,"user_id");
   }
   function category(){
      return $this->belongsTo(Category::class);
   }
}
