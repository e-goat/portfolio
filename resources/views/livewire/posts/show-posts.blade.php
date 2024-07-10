<div>
    @foreach ($posts as $post)
        <article wire:key="{{ $post->id }}" class="text-start p-5"> 
            <h1><strong>Title:</strong> {{ $post->title }}</h1>
            <p><strong>Author:</strong> {{ $post->user->name }}</p>
            <p><strong>Content:</strong> {{ $post->content }}</p>
            <p><strong>Created At:</strong> {{ $post->created_at }}</p>
        </article>
    @endforeach
</div>
