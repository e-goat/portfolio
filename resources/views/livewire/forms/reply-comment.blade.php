<div class="mt-5">
    <form wire:submit="create">
        {{ $this->form }}
        <x-button class="mt-4" type="submit">
            {{ __('Write') }}
        </x-button>
    </form>
    
    <x-filament-actions::modals />
</div>