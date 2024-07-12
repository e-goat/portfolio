<?php

namespace App\Livewire\Forms;

use Filament\Forms\Components\TextArea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\View\View;
use App\Models\Comment as CommentModel;
use Laravel\Jetstream\InteractsWithBanner;

class Comment extends Component implements HasForms
{
    use InteractsWithForms;
    use InteractsWithBanner;

    public ?array $data = [];
    public $postID = null;

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextArea::make('content')
                ->label('')
                ->minLength(3)
                ->maxLength(250)
                ->required()
                ->markAsRequired(false),
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        if ( ! auth()->check()) {
            return;
        }

        $post = $this->postID;
        if ( is_null($post)) {
            return;
        }

        $formData = $this->form->getState();
        $content = $formData['content'];
        $serializedData = [
            'post_id' => $post,
            'user_id' => auth()->id(),
            'content' => $content,
        ];
        
        $comment = new CommentModel();
        $comment->store($serializedData);

        $this->banner(__('Your comment will be visible after it is approved by our moderators. Please be patient.'));
        $this->form->fill();
        $this->dispatch('comment-added');
    }

    public function render(): View
    {
        return view('livewire.forms.comment');
    }
}
