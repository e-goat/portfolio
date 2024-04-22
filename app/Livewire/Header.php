<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $page = request()->route()->uri ;

        return view('livewire.header', compact('page'));
    }
}
