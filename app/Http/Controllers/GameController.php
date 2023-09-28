<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Game;
use App\Models\Rate;
use Cloudinary;

class GameController extends Controller
{
    public function index(Game $game) 
    {   
        return view('games/index')->with(['games' => $game->getPaginateByLimit()]);
    }
    
    public function show(Game $game, Comment $comment, Rate $rate)
    {   
        $rate_avg = $rate->where('game_id', $game->id)->avg('rate');
        $rate_avg = round($rate_avg);
        return view('games/show')->with(['game' => $game, 'rate_avg' => $rate_avg, 'comments' => $comment->getByUser()]);
    }
    
    public function create(Category $category)
    {
        return view('games/create')->with(['categories' => $category->get()]);
    }
    
    public function store(Game $game, GameRequest $request)
    {   
        $input = $request['game'];
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];
        $game->fill($input)->save();
        return redirect('/games/' . $game->id);
    }
    
    public function edit(Game $game, Category $category)
    {   
        return view('/games/edit')->with(['game' => $game, 'categories' => $category->get()]);
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
