<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

class Friend extends Model
{
    use HasFactory;
    protected  $fillable=[
        'user_id',
        'requester',
        'request',
        'isfriend'
    ];

    public function find_if($user_id): string
    {
       $find= Friend::all()->where('user_id',$user_id)->where('requester',Auth::id())->first();
        if($find){
            if($find->isfriend == 1 ){
                return 'isfriend';

            }
            elseif ($find->request == 1  && $find->isfriend==0){
                return 'requested';
            }
            else return 'add friend';
        }
        else{
            return 'add friend';
        }
    }
    public function addFriend($user_id){
        $requester=Auth::id();
       $search= Friend::where('requester',$requester)
            ->where('user_id',$user_id)->first();

       if($search){
           if($search->request==0){
               $search->request=1;
               $search->update();
           }else {
               return back('The request is already hold');
           }
       }else{
           Friend::create([
               'user_id'=>$user_id,
               'requester'=>Auth::id(),
               'request'=>1

           ]);
       }



    }
    public function acceptrequest($id){
       $accept =Friend::where('id' ,$id)->first();
        $accept->isfriend=1;
        $accept->request=0;
        $accept->update();

    }
    function user(){
        return $this->belongsTo(User::class,'requester');
    }
    public function deleteRequest($id){
        $accept =Friend::where('id' ,$id)->first();

        $accept->delete();

    }
}
