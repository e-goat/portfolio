<div class="p-5">
    <div class="flex items-center">
        <svg data-v-2836fdb5-s="" height="16px" viewBox="0 0 16 16" width="16px" class="mr-2 fill-current text-grey-800"><g data-v-2836fdb5-s="" fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g data-v-2836fdb5-s="" id="Group" class="fill-current" transform="translate(0.000000, -336.000000)"><path data-v-2836fdb5-s="" d="M0,344 L6,339 L6,342 C10.5,342 14,343 16,348 C13,345.5 10,345 6,346 L6,349 L0,344 L0,344 Z M0,344"></path></g></g></svg><p data-v-2836fdb5-s="" class="font-semibold"> Reply to <strong data-v-2836fdb5-s="" class="uppercase text-blue-400">Post</strong></p>
    </div>

    <form wire:submit="create">
        {{ $this->form }}
        <x-button class="mt-4" type="submit">
            {{ __('Write') }}
        </x-button>
    </form>
    
    <x-filament-actions::modals />
</div>