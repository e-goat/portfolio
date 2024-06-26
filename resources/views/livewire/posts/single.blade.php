<div class="h-full w-full flex flex-col bg-transperant">
    <article>
        <div class="space-y-4 max-xl flex flex-col justify-between">
            <div class="flex flex-col gap-4">
                
                <a href="{{ route('home') }}" class="text-sky-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 p-3 w-max" wire:navigate>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
                    </svg>
                </a>
                <h1 class="underline mb-4 text-4xl font-extrabold text-center leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">{{ $post->title }}</h1>
                <!-- <h1 class="text-2xl dark:text-white text-center underline">{{ $post->title }}</h1> -->
            </div>

            <div class="font-medium d-flex justify-between align-content-center">
                <div class="flex items-center gap-4 w-full ">
                    <img class="w-10 h-10 rounded-full ring-2 ring-gray-300 dark:ring-gray-500 p-1" src="{{$image}}" alt="">
                    <div class="font-medium dark:text-white">
                        <div>{{$post->user->name}}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Posted at {{$post->created_at}}</div>
                    </div>
                </div>
            </div>
            <blockquote>
                <p class="text-lg text-center font-medium dark:text-white">
                    {{ $post->content }}
                </p>
            </blockquote>
        </div>
    </article>
</div>
