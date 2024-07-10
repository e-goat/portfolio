<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
    @foreach ($posts as $post)
        @php $slug = $post->slug; @endphp
        <livewire:posts.post :$post :key="$post->id" :$slug>
    @endforeach
</div>
