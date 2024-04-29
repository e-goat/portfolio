<article class="bg-slate-100 rounded-xl p-8">
    <div class="space-y-4 max-xl flex flex-col justify-between h-full">
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <blockquote>
            <p class="text-lg font-medium line-clamp-1">
                {{ $post->content }}
            </p>
        </blockquote>
        <div class="font-medium flex flex-col sm:flex-row justify-between items-center">
            <div>
                <div class="text-sky-500">
                    {{$post->user->name}}
                </div>
                <div class="text-slate-700">
                    {{$post->created_at}}
                </div>
            </div>
            <div class="m-2">
                <a href="{{ route('post.show', $post->slug) }}" class="text-white hover:text-gray-200" wire:navigate><em class="p-2 bg-slate-400 rounded">Read more</em></a>
            </div>
        </div>
    </div>
</article>