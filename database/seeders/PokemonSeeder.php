<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = [
            [
                'name' => 'Bulbasaur',
                'description' => 'This is pokemon Bulbasaur',
                'height' => 10.5,
                'weight' => 30.5,
                'ability' => 'Can fight to others pokemons'
            ],
            [
                'name' => 'Charizard',
                'description' => 'This is pokemon Charizard',
                'height' => 10.5,
                'weight' => 30.5,
                'ability' => 'Can fight to others pokemons'
            ],
            [
                'name' => 'Pikachu',
                'description' => 'This is pokemon Pikachu',
                'height' => 10.5,
                'weight' => 30.5,
                'ability' => 'Can fight to others pokemons'
            ],
            [
                'name' => 'Squirtle',
                'description' => 'This is pokemon Squirtle',
                'height' => 10.5,
                'weight' => 30.5,
                'ability' => 'Can fight to others pokemons'
            ],
            [
                'name' => 'Mew',
                'description' => 'This is pokemon Mew',
                'height' => 10.5,
                'weight' => 30.5,
                'ability' => 'Can fight to others pokemons'
            ],
        ];

        foreach ($pokemons as $pokemon) {
            DB::table('pokemons')->insert($pokemon);
        }
    }
}
