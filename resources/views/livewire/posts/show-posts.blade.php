<div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($posts as $post)
            @php $slug = $post->slug; @endphp
            <livewire:posts.post :$post :key="$post->id" :$slug>
        @endforeach
    </div>
    <div class="p-4">
        {{ $posts->links('livewire.paginator') }}
    </div>
</div>