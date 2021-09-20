<x-layout>
    <form action="/posts" method="post" align="center">
        @csrf
        <div class="mb-3" align="center">
            title<input type="text" class="input-group-text" name="title"><br>
            description<input type="text" class="input-group-text" name="body"><br>
            <br>
            Slug<input type="text" class="input-group-text" name="slug"><br>
            <br>
            Excerpt<input type="text" class="input-group-text" name="excerpt"><br>
            <br>

            Category :  <select name="category">
        @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <input type="submit"  class="btn btn-primary" value="Add">
        </div>
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

