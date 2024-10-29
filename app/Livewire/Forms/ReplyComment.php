<?php

namespace App\Livewire\Forms;

use Filament\Forms\Components\Hidden;
use Livewire\Component;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Laravel\Jetstream\InteractsWithBanner;
use Filament\Forms\Form;
use App\Models\Comment as CommentModel;
use App\Models\Reply as ReplyModel;

class ReplyComment extends Component implements HasForms
{

    use InteractsWithForms;
    use InteractsWithBanner;

    public ?array $data = [];
    public $comment;

    public function mount(CommentModel $comment): void
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
                Hidden::make('comment_id')
                    ->default($this->comment->id),
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
        $formData = $this->form->getState();
        ReplyModel::create($formData);
        $this->dispatch('commentReplyAdded', $this->comment->post->id);
    }

    public function render()
    {
        return view('livewire.forms.reply-comment');
    }
}
