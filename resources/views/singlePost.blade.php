<!-- <?php
echo "<h2>{$post->title}</h2><br>";
echo "<h3>{$post->body}</h3>";
echo "<a href='/posts'>Back</a>";

?> -->
<x-layout>
    <h1>{!!$post->title!!}</h1><br>
    <a href ="/users/{{$post->author->username}}"><h4>By {{$post->author->name}}</h4></a>

<h5>{!!$post->body!!}</h5>
<a href='/posts'>Back</a>
</x-layout>