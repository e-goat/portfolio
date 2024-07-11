<div class="h-full flex flex-col">
    <article class="bg-slate-100 rounded-xl p-8 dark:bg-slate-800 dark:shadow-none shadow-lg">
        <div class="space-y-4 max-xl flex flex-col justify-between">
            <div class="flex flex-col gap-4">
                <a href="{{ route('home') }}" class="text-sky-500 hover:text-sky-800" wire:navigate>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
                    </svg>
                </a>
                <h1 class="text-2xl dark:text-white text-center">{{ $post->title }}</h1>
            </div>
            <div class="font-medium d-flex justify-between align-content-center">


                <div class="flex items-center gap-4">
                    <img class="w-10 h-10 rounded-full ring-2 ring-gray-300 dark:ring-gray-500 p-1" src="{{$image}}" alt="">
                    <div class="font-medium dark:text-white">
                        <div>{{$post->user->name}}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Posted at {{$post->created_at}}</div>
                    </div>
                </div>
            </div>
            <blockquote>
                <p class="text-lg font-medium dark:text-white">
                    {{ $post->content }}
                </p>
            </blockquote>
        </div>
    </article>
</div>
