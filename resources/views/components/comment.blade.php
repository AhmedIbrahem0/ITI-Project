@props(['comment'])
<div class="card p-3 mt-2">
    <div class="d-flex justify-content-between align-items-center">
        <div class="user d-flex flex-row align-items-center">
            <img src="{{asset('/storage/images').'/' . $comment->author->avatar}}" width="30" class="user-img rounded-circle mr-2">
            <span><small class="font-weight-bold text-primary">{{$comment->author->username}}</small>
                <small class="font-weight-bold">{{$comment->body}} </small></span> </div> <small>{{$comment->created_at->diffForhumans()}}</small>
    </div>
    <div class="action d-flex justify-content-between mt-2 align-items-center">

        <div class="icons align-items-center"> <i class="fa fa-user-plus text-muted"></i> <i class="fa fa-star-o text-muted"></i> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
    </div>
</div>
