<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Laravel\Jetstream\InteractsWithBanner;
use Filament\Forms\Form;
use App\Models\Comment as CommentModel;

class EditComment extends Component implements HasForms
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
                TextArea::make('content')
                ->label('')
                ->default($this->comment->content)
                ->minLength(3)
                ->maxLength(250)
                ->required()
                ->markAsRequired(false),
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $formData = $this->form->getState();
        if ($this->comment->content === $formData['content']) {
            return;
        }

        $this->comment->update($formData);
        $this->dispatch('commentEdited', $this->comment->post->id);
        $this->banner('Comment edited successfully.');
    }

    public function render()
    {
        return view('livewire.forms.edit-comment');
    }
}
