<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Requests\GameRequest;

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
    
    public function create()
    {
        return view('games/create');
    }
    
    public function store(Game $game, GameRequest $request)
    {
        $input = $request['game'];
        $game->fill($input)->save();
        return redirect('/games/' . $game->id);
    }
}
