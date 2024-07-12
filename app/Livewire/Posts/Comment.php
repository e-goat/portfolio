<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Comment as CommentModel;
use Laravel\Jetstream\InteractsWithBanner;

class Comment extends Component
{
    use InteractsWithBanner;

    public $comment;
    public $confirmingCommentDeletion;
    public $editingCommentProp;
    public $replyingCommentProp;

    protected $listeners = [
        'commentEdited' => 'editingCommentCloseModal',
        'commentReplyAdded' => 'replyingCommentCloseModal',
    ];

    public function mount(CommentModel $comment)
    {
        $this->comment = $comment;
        $this->editingCommentProp = false;
        $this->confirmingCommentDeletion = false;
        $this->replyingCommentProp = false;
    }

    public function approve(): void
    {
        $this->comment->update([
            'approved' => true,
            'approved_at' => now(),
            'approved_by' => auth()->id(),
        ]);

        $this->dispatch('commentApproved', $this->comment->post->id);
    }

    public function deletingComment(): bool
    {
        return $this->confirmingCommentDeletion = true;
    }

    public function deleteComment(): void
    {
        $this->comment->delete();
        $this->dispatch('commentDeleted', $this->comment->post->id);
        $this->banner('Comment deleted successfully.');
    }

    public function editingComment(): bool
    {
        return $this->editingCommentProp = true;
    }

    public function editingCommentCloseModal(): bool
    {
        return $this->editingCommentProp = false;
    }

    public function replyToComment(): bool
    {
        return $this->replyingCommentProp = true;
    }

    public function replyingCommentCloseModal(): bool
    {
        return $this->replyingCommentProp = false;
    }

    public function render()
    {
        return view('livewire.posts.comment')
            ->with('comment', $this->comment);
    }
}
