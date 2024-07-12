<section class="mt-8">
    <h2 class="text-xl font-bold text-gray-900 underline text-start">{{__("Comments")}} ({{$post->getApprovedComments()->count()}})</h2>
    <div class="mt-4 mb-4 border rounded max-h-80 overflow-auto">
        @foreach ($post->getApprovedComments() as $comment)
            <livewire:posts.comment :$comment :key="$comment->id"/>
        @endforeach
    </div>
</section>