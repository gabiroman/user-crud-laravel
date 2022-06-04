<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiOptionNavMenu extends Component
{
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.li-option-nav-menu');
    }
}
