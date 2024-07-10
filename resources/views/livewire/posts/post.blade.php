<article class="bg-slate-100 rounded-xl p-8 cursor-pointer">
    <div class="pt-6 text-center space-y-4 max-xl">
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <blockquote>
            <p class="text-lg font-medium line-clamp-5">
                {{ $post->content }}
            </p>
        </blockquote>
        <caption class="font-medium">
            <div class="text-sky-500 dark:text-sky-400">
                {{$post->user->name}}
            </div>
            <div class="text-slate-700 dark:text-slate-500">
                {{$post->created_at}}
            </div>
        </caption>
    </div>
</article>