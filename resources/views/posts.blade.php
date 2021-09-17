<x-layout>
    <x-postheader :categories="$categories"></x-postheader>
<div class="max-w-xl mx-auto mt-20 text-center">
    <h3 class="text-4xl">

        {{Auth::id()}}
        Welcome Back <span class="text-blue-500">at News Website</span>
    </h3>


    <p class="text-sm mt-14">
    We hope that you are enjoying our social website and find what your are looking for
    </p>

</div>
    @if($posts->count())
        <x-SpecialArticle :post="$posts[0]"></x-SpecialArticle>
        @if($posts->count()>1)
            <div class="lg:grid lg:grid-cols-2">
                @foreach($posts->skip(1) as $post)

                    <x-Card  :post="$post"></x-Card>

                @endforeach

            </div>
        @endif
    @else
        <p class="text-center">No Posts added yet</p>
    @endif

</x-layout>
