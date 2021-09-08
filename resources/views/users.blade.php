<x-layout>
    @foreach($users as $user) 
    <h3> {{$user->name}}</h3>
 <h1 style="color:grey; font-size:15px">email :{{ $user->email}}</h3> 
<a href="users/{{$user->username}}">    <h1 style="color:blue; font-size:15px">Posts</h3></a>


    @endforeach
</x-layout>