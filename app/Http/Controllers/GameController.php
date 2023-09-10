<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Game;
use App\Models\Rate;
use App\Http\Requests\GameRequest;

class GameController extends Controller
{
    public function index(Game $game) 
    {
        return view('games/index')->with(['games' => $game->getPaginateByLimit()]);
    }
    
    public function show(Game $game, Comment $comment, Rate $rate)
    {   
        return view('games/show')->with(['game' => $game, 'rates' => $rate->get(), 'comments' => $comment->getByUser()]);
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
    
    public function edit(Game $game)
    {
        return view('games/edit')->with(['game' => $game]);
    }
    
    public function update(GameRequest $request, Game $game)
    {
        $input_game = $request['game'];
        $game->fill($input_game)->save();
        
        return redirect('/games/' . $game->id);
    }
    
    public function delete(Game $game)
    {
        $game->delete();
        return redirect('/');
    }
    
}
