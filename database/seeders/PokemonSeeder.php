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
                'code' => '001',
                'name' => 'Bulbasaur',
                'description' => 'This is pokemon Bulbasaur',
                'height' => 10.5,
                'weight' => 30.5,
                'ability' => 'Can fight to others pokemons'
            ],
            [
                'code' => '006',
                'name' => 'Charizard',
                'description' => 'This is pokemon Charizard',
                'height' => 10.5,
                'weight' => 30.5,
                'ability' => 'Can fight to others pokemons'
            ],
            [
                'code' => '025',
                'name' => 'Pikachu',
                'description' => 'This is pokemon Pikachu',
                'height' => 10.5,
                'weight' => 30.5,
                'ability' => 'Can fight to others pokemons'
            ],
            [
                'code' => '007',
                'name' => 'Squirtle',
                'description' => 'This is pokemon Squirtle',
                'height' => 10.5,
                'weight' => 30.5,
                'ability' => 'Can fight to others pokemons'
            ],
            [
                'code' => '026',
                'name' => 'Raichu',
                'description' => 'This is pokemon Raichu',
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
