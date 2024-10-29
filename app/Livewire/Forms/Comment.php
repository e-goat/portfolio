<?php

namespace App\Livewire\Forms;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
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
                Textarea::make('content')
                ->label('')
                ->minLength(3)
                ->maxLength(250)
                ->required()
                ->markAsRequired(false),

                Hidden::make('post_id')
                    ->default($this->postID),
                Hidden::make('user_id')
                    ->default(auth()->id()),

                // For testing purposes, we will approved this by default
                Hidden::make('approved')
                    ->default(true),
                Hidden::make('approved_at')
                    ->default(now()),
                Hidden::make('approved_by')
                    ->default(auth()->id()),
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        if ( ! auth()->check()) {
            return;
        }

        if ( is_null($this->postID)) {
            return;
        }

        $formData = $this->form->getState();
        $comment = new CommentModel();
        $comment->store($formData);

        $this->banner(__('Your comment will be visible after it is approved by our moderators. Please be patient. (For testing purposes, we have approved your comment.)'));
        $this->form->fill();
        $this->dispatch('commentAdded', $this->postID);
    }

    public function render(): View
    {
        return view('livewire.forms.comment');
    }
}
