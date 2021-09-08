<x-layout>

    <p>
    <h1 style="color: grey;">Posts By {{$user->name}}</h1>
    </p><br>

    <table class="table table-dark table-striped">
        <th>Title</th>
        <th>Slug</th>
        <th>Category</th>
        <th>Body</th>

    @foreach($user->posts as $post )
<tr>
<td>
  {{$post->title}}
</td>
<td>
    {{$post->slug}}
</td>
<td>
{{$post->category->name}}
</td>
<td>
    {{$post->body}}
</td>
<tr>



        <!-- <h3>{!!$post->title!!}</h1>
            <h4>By {{$post->author->name}}</h4>

            <h5>{!!$post->body!!}</h5>

            <p>
            <h5 style="color: blue;"> Category : {!!$post->category->name!!}</h5><br>

            </p> -->

            @endforeach
            </table>
            <a href='/users'>Back</a>

</x-layout>