<?php

namespace App\Livewire;

use Livewire\Component;

class TheItemsData extends Component
{
    public $pokemon;

    public function render()
    {
        return view('livewire.the-items-data');
    }
}
