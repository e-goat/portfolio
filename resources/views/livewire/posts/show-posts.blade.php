<div>
    <div class="grid sm:grid-cols-none md:grid-cols-2 gap-4">
        @foreach ($posts as $post)
            @php $slug = $post->slug; @endphp
            <livewire:posts.post :$post :key="$post->id" :$slug>
        @endforeach
    </div>
    <div class="p-4">
        {{ $posts->links() }}
    </div>
</div>
