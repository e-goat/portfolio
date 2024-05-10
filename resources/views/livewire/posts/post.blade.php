<article class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 cursor-default">
    <a href="{{ route('post.show', $post->slug) }}" class="cursor-default">
        <img class="rounded-t-lg" src="{{$image}}" alt="" />
    </a>
    <div class="p-5 flex flex-col items-center space-between">
        <a href="{{ route('post.show', $post->slug) }}" wire:navigate class="cursor-default">
            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">{{$post->title}}</p>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-1">{{$post->content}}</p>
        <a href="{{ route('post.show', $post->slug) }}" wire:navigate class="w-max inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slate-600 cursor-default dark:text-slate-50">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</article>


