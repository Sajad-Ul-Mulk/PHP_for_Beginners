@props(['post'])

<article
   class= "transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5">
        <div>
            <img src={{asset('images/illustration-3.png')}}  class="rounded-xl" >
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <x-category-button :category="$post->category"/>

                </div>


                <div class="mt-4">
                    <h1 class="text-3xl">
                        {{'title:'.$post->title}}
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$post->created_at}}</time>
                                    </span>
                </div>
            </header>

            <div class="text-sm mt-4">
                <p>
                  {{ $post->excerpt}}
                </p>
<p>
                  {{$post->body}}
                </p>

            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src={{asset("images/lary-avatar.svg")}}>
                    <div class="ml-3">

                        <a href="/?user={{$post->user->name}}">
                            <h5 class="font-bold">{{$post->user->name}}</h5>
                        </a>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{$post->name}}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
