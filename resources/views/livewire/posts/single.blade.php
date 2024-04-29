<article class="bg-slate-100 rounded-xl p-8">
    <div class="space-y-4 max-xl flex flex-col justify-between">
        <div>
            <a href="{{ route('home') }}" class="text-sky-500 hover:text-sky-800" wire:navigate>Back</a>
            <h1 class="text-2xl">{{ $post->title }}</h1>
        </div>
        <blockquote>
            <p class="text-lg font-medium">
                {{ $post->content }}
            </p>
        </blockquote>
        <div class="font-medium d-flex justify-between align-content-center">
            <div>
                <div class="text-sky-500">
                    {{$post->user->name}}
                </div>
                <div class="text-slate-700">
                    {{$post->created_at}}
                </div>
            </div>
        </div>
    </div>
</article>