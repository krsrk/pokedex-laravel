<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show()
    {
        return response()->json(Pokemon::all(), 200);
    }
}
