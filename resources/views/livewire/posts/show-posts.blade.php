<div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($posts as $post)
            @php $slug = $post->slug; @endphp
            <livewire:posts.post :$post :key="$post->id" :$slug>
        @endforeach
    </div>
    <div class="p-4">
        {{ $posts->links() }}
    </div>
</div>