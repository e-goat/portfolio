<article class="bg-slate-100 rounded-xl p-8">
    <div class="pt-6 space-y-4 max-xl">
        <h1 class="text-2xl">{{ $post->title }}</h1>
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