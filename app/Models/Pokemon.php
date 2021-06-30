<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';

    protected $appends = ['more_info_url', 'image_url'];

    public function getMoreInfoUrlAttribute()
    {
        return "https://www.pokemon.com/el/pokedex/" . strtolower($this->name);
    }

    public function getImageUrlAttribute()
    {
        return "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/" .
            ltrim($this->code, '0') . '.png';
    }
}
