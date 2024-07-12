<div class="flex flex-col gap-2 p-6">
    <div class="flex items gap-2">
        <img class="w-10 h-10 rounded-full ring-2 ring-gray-300 p-1" src="{{$comment->user->profile_photo_url}}" alt="">
        <div class="font-light">
            <div>{{$comment->user->name}}</div>
            <div class="text-sm text-gray-500">{{__("Posted at")}} {{$comment->created_at}}</div>
        </div>
    </div>
    <p class="text-md text-gray-900">
        {{$comment->content}}
    </p>
    <div class="actions">
        @if (Auth::check() && Auth::user()->id === $comment->user_id)
            <div class="flex gap-2">
                <button class="text-sky-500 hover:text-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500" wire:click="editingComment()">
                    {{__("Edit")}}
                </button>
                <button class="text-red-500 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-500" wire:click="deletingComment()">
                    {{__("Delete")}}
                </button>
            </div>
        @endif

        @if (Auth::check() && Auth::user()->id !== $comment->user_id)
            <button class="text-sky-500 hover:text-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500" wire:click="replyToComment()">
                {{__("Reply")}}
            </button>
        @endif

        @if ($comment->replies->count() > 0)
            <div class="mt-4 border rounded max-h-80 overflow-auto">
                @foreach ($comment->replies as $reply)
                    <div class="flex flex-col gap-2 p-4">
                        <img class="w-10 h-10 rounded-full ring-2 ring-gray-300 p-1" src="{{$comment->user->profile_photo_url}}" alt="">
                        <div class="flex items">
                            <div class="font-light">
                                <div>{{$reply->user->name}}</div>
                                <div class="text-sm text-gray-500">{{__("Posted at")}} {{$reply->created_at}}</div>
                            </div>
                        </div>
                        <p class="text-md text-gray-900">
                            {{$reply->content}}
                        </p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Modals --}}
    <x-confirmation-modal wire:model="confirmingCommentDeletion">
        <x-slot name="title">
            {{ __('Delete Comment') }}
        </x-slot>
    
        <x-slot name="content">
            {{ __('Are you sure you want to delete this comment?') }}
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingCommentDeletion')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
    
            <x-danger-button class="ml-2" wire:click="deleteComment" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>

    <x-dialog-modal wire:model="editingCommentProp">
        <x-slot name="title">
            {{ __('Edit Comment') }}
        </x-slot>
    
        <x-slot name="content">
            <livewire:forms.edit-comment :$comment/>
        </x-slot>

        <x-slot name="footer"></x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model="replyingCommentProp">
        <x-slot name="title">
            {{ __('Reply to Comment') }}
        </x-slot>
    
        <x-slot name="content">
            <livewire:forms.reply-comment :$comment/>
        </x-slot>

        <x-slot name="footer"></x-slot>
    </x-dialog-modal>
</div>