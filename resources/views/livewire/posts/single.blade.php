<div class="h-full w-full flex flex-col bg-transperant">
    <article>
        <div class="space-y-4 max-xl flex flex-col justify-between">
            <div class="flex gap-4 py-4">
                    <a href="{{ route('home') }}" class="text-sky-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 w-max flex items-center" wire:navigate>
                        <svg class="w-10 h-10 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
                        </svg>
                    </a>
                </a>
                <h1 class="underline mb-4 text-4xl font-extrabold text-center leading-none tracking-tight capitalize text-gray-900 md:text-5xl lg:text-6xl">{{ $post->title }}</h1>
                </h1>
            </div>

            <div class="font-medium d-flex justify-between align-content-center">
                <div class="flex items-center gap-4 w-full ">
                    <img class="w-10 h-10 rounded-full ring-2 ring-gray-300 p-1" src="{{$image}}" alt="">
                    <div class="font-medium">
                        <div>{{$post->user->name}}</div>
                        <div class="text-sm text-gray-500">{{__("Posted at")}} {{$post->created_at}}</div>
                    </div>
                </div>
            </div>
            <div class="text-lg text-start font-light cointainer">
                <span class="prose">
                    {{ Illuminate\Mail\Markdown::parse($post->content) }}
                </span>
            </div>
        </div>
    </article>

    @if (Auth::check())
        @php $postID = $post->id @endphp
        <livewire:forms.comment :$postID/>
    @endif

    {{-- @if ($post->getApprovedComments()->count() > 0) --}}
        <livewire:posts.comments :$post :key="$post->id"/>
    {{-- @endif --}}

    {{-- Scroll to top --}}
    @script
        <script>
            $wire.on('commentAdded', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            $wire.on('commentDeleted', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            $wire.on('commentEdited', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        </script>
    @endscript
</div>
