
@props(['user'])
<div class="nearby-user">
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <img src="{{asset('/storage/images').'/' . $user->avatar}}" alt="user" class="profile-photo-lg">
        </div>
        <div class="col-md-7 col-sm-7">
            <h5 class="profile-link"><a href="users/{{$user->username}}"> {{$user->name}}</a> </h5>
            <p class="text-muted">{{$user->username}}</p>
        </div>
        <div class="col-md-3 col-sm-3">
            <?php
                use App\Models\Friend;
                $friend=new Friend();
            $find_requester=$friend::where('user_id',$user->id)->where('requester', \Illuminate\Support\Facades\Auth::id())->first();
            $find_user=$friend::where('requester',$user->id)->where('user_id', \Illuminate\Support\Facades\Auth::id())->first();

            if($find_requester){
                        if($find_requester->isfriend ==1){
                            echo "<a class='btn pull-right' style='background-color: green ; color: white' >Friends</a>";
                        }elseif($find_requester->isfriend ==0 ||$find_requester->request ==1 ){

                            echo "<a class='btn btn-primary pull-right ' style='background-color: grey ;color: white' >Request Sent</a>";
                        }else{
                            echo "<a class='btn btn-primary pull-right' href='/addfriend{$user->id}' >Add Friend</a>";

                        }

                    } elseif($find_user){

                if($find_user->isfriend ==1){
                    echo "<a class='btn pull-right' style='background-color: green ; color: white' >Friends</a>";
                }else if($find_user->isfriend ==0 ||$find_user->request ==1 ){

                    echo "<a class='btn btn-primary pull-right ' style='background-color: grey ;color: white' >Request Sent</a>";
                }
                else{
                    echo "<a class='btn btn-primary pull-right' href='/addfriend{$user->id}' >Add Friend</a>";

                }
                    }else{
                echo "<a class='btn btn-primary pull-right' href='/addfriend{$user->id}' >Add Friend</a>";

            }


            ?>

        </div>
    </div>
</div>
