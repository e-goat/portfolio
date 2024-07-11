{{-- <article class="bg-slate-100 rounded-xl p-8 dark:bg-slate-800 shadow-lg border-2 dark:border-none border-slate-300">
    <div class="space-y-4 max-xl flex flex-col justify-between h-full dark:text-white">
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <blockquote>
            <p class="text-lg font-medium line-clamp-1">
                {{ $post->content }}
            </p>
        </blockquote>
        <div class="font-medium flex flex-col sm:flex-row justify-between gap-2 items-center">
            <div>
                <div class="flex gap-2 justify-center items-center">
                    <div class="h-14 w-14 bg-slate-600 dark:bg-slate-50 flex items-center justify-center rounded-full">
                        <img class="object-cover h-12 w-12 rounded-full " src="{{$image}}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="text-sky-500">
                            {{$post->user->name}}
                        </div>
                        <div class="text-slate-700 dark:text-slate-400">
                            {{$post->created_at}}
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('post.show', $post->slug) }}" class="text-white p-2 bg-slate-600 rounded dark:text-slate-900 hover:text-gray-200 hover:opacity-90 sm:text-xs" wire:navigate><em>Read more</em></a>
        </div>
    </div>
</article> --}}
{{-- <a href="{{ route('post.show', $post->slug) }}" wire:navigate class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{$image}}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title}}</h5>
        <p class="line-clamp-1 mb-3 font-normal text-gray-700 dark:text-gray-400">{{$post->content}}</p>
    </div>
</a> --}}
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="{{ route('post.show', $post->slug) }}">
        <img class="rounded-t-lg" src="{{$image}}" alt="" />
    </a>
    <div class="p-5">
        <a href="{{ route('post.show', $post->slug) }}" wire:navigate>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title}}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-1">{{$post->content}}</p>
        <a href="{{ route('post.show', $post->slug) }}" wire:navigate class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>


