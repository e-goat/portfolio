<div>
    @if ($posts->isEmpty())
        <div class="flex justify-center items-center h-96">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-800">No posts found</h1>
                <p class="text-gray-500">There are no posts to show at the moment</p>
                <button class="border rounded p-2 hover:bg-slate-100 mt-5">
                    <div class="contentWrap flex justify-center items-center">
                        <p class="text-gray-500">Create a new post</p>
                        <div class="icon">
                            <svg class="w-10 h-10 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    @endif

    <div class="grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 auto-rows-[minmax(0,_2fr)] place-content-center">
        @foreach ($posts as $post)
            @php $slug = $post->slug; @endphp
            <livewire:posts.post :$post :key="$post->id" :$slug>
        @endforeach
    </div>
    <div class="p-4">
        {{ $posts->withQueryString()->links() }}
    </div>
</div>