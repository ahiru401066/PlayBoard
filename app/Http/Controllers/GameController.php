<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(Game $game) 
    {
        return view('games/index')->with(['games' => $game->getPaginateByLimit()]);
    }
    
    public function show(Game $game)
    {
        return view('games/show')->with(['game' => $game]);
    }
}
