@props(['request'])
<?php

   $user= \App\Models\User::where('id',$request->requester)->first();
   $ave=asset('/storage/images').'/' . $user->avatar;
  echo "
  <li href='#' class='list-group-item text-left'>
                <img   src='{$ave}'>
                <label class='name'>
                   $user->name<br>
    <p class='text-muted bg-gray'>$user->username</p>
                </label>

                <label class='pull-right'>
                    <br>
                    <a  class='btn btn-success btn-xs glyphicon glyphicon-ok' href='/acceptRequest{$request->id}' >Accept</a>
                    <a  class='btn btn-danger  btn-xs glyphicon glyphicon-trash' href='/DeleteRequest{$request->id}' title='Delete'>Delete</a>
                </label>
                <div class='break'></div>
            </li>";

?>
