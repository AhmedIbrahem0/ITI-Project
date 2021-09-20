<x-layout>

<x-postheader :categories="$categories" :currentcategory="$category"/>

  @if($category->posts->count())
  <x-SpecialArticle :post="$category->posts[0]" />

      @if($category->posts->count()>1)
  <div class="lg:grid lg:grid-cols-2">
  @foreach($category->posts->skip(1) as $post)

    <x-Card : class='{{$loop->iteration <3?"col-span-3":"col-span-2"}}' :post="$post"/>

  @endforeach

  </div>
  @endif
  @else
  <p class="text-center">No Posts added yet</p>
  @endif

</x-layout>
