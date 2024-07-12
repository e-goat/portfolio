<article class="max-w-sm bg-white border border-gray-200 rounded-lg shadow cursor-default flex flex-col">
    <a href="{{ route('post.show', $post->slug) }}" class="cursor-default">
        <img class="rounded-t-lg" src="{{ $image }}" alt="" />
    </a>
    <div class="p-5 flex flex-col space-between justify-between flex-grow">
        <a href="{{ route('post.show', $post->slug) }}" wire:navigate class="cursor-default">
            <p class="mb-2 text-xl font-bold tracking-tight line-clamp-3 text-gray-900 capitalize">
                {{ $post->title }}
            </p>
        </a>
        <div>
            {{-- <p class="mb-3 font-normal text-gray-700 line-clamp-1">{{ $post->content }}</p> --}}
            <div class="flex items-center mt-3 w-max text-sm font-medium text-slate-600 cursor-default">
                <span class="mr-1">
                    <svg width="14" height="14" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="ic_fluent_comment_24_regular" fill="#212121" fill-rule="nonzero">
                                <path
                                    d="M5.25,18 C3.45507456,18 2,16.5449254 2,14.75 L2,6.25 C2,4.45507456 3.45507456,3 5.25,3 L18.75,3 C20.5449254,3 22,4.45507456 22,6.25 L22,14.75 C22,16.5449254 20.5449254,18 18.75,18 L13.0124851,18 L7.99868152,21.7506795 C7.44585139,22.1641649 6.66249789,22.0512036 6.2490125,21.4983735 C6.08735764,21.2822409 6,21.0195912 6,20.7499063 L5.99921427,18 L5.25,18 Z M12.5135149,16.5 L18.75,16.5 C19.7164983,16.5 20.5,15.7164983 20.5,14.75 L20.5,6.25 C20.5,5.28350169 19.7164983,4.5 18.75,4.5 L5.25,4.5 C4.28350169,4.5 3.5,5.28350169 3.5,6.25 L3.5,14.75 C3.5,15.7164983 4.28350169,16.5 5.25,16.5 L7.49878573,16.5 L7.49899997,17.2497857 L7.49985739,20.2505702 L12.5135149,16.5 Z"
                                    id="🎨-Color">
    
                                </path>
                            </g>
                        </g>
                    </svg>
                </span>
                <span>{{ $post->getApprovedComments()->count() }}</span>
            </div>
    
            <a href="{{ route('post.show', $post->slug) }}" wire:navigate
                class="w-max flex items-center text-sm font-medium text-slate-600 cursor-default">
                <span>{{__("Read more")}}</span>
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</article>
