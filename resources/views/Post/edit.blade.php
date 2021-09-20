<x-layout>
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('PUT')
        <h2>title</h2><br>
        <input type="text" value="{{$post->title}}" name="title" class="form-control">
        <pre>

</pre>
        <h3>Body</h3><br>
        <input type="text"  class="form-control" name="body" value="{{$post->body}}" aria-label="With textarea">
        <pre>

</pre>
        <h3>Slug</h3><br>
        <input type="text"  class="form-control" name="slug" value="{{$post->slug}}" aria-label="With textarea">
        <pre>

</pre>
        <h3>Excerpt</h3>
        <input type="text" class="form-control" name="excerpt" value="{{$post->excerpt}}"><br><br>
        <input type="submit" value="Update" class="btn btn-success">
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>
