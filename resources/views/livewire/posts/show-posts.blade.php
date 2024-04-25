<div class="grid grid-col gap-5 p-5">
    @foreach ($posts as $post)
        <livewire:posts.post :$post :key="$post->id">
    @endforeach
</div>
