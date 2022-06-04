<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiMenu extends Component
{
    public $title;
    public $url;

    public function render()
    {
        return view('livewire.li-menu');
    }
}
