<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pokemon;

class PokedexContent extends Component
{
    public $pokemons;
    public string $search = '';

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function render()
    {
        $this->pokemons = Pokemon::where('name', 'like', '%'.$this->search.'%')->get();

        return view('livewire.pokedex-content', [
            'pokemons' => $this->pokemons,
        ]);
    }
}
