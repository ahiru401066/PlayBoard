<?php

namespace App\Http\Controllers;
use App\Models\Rate;
use App\Models\Game;
use Illuminate\Http\Request;


class RateController extends Controller
{
    public function store(Rate $rate, Game $game, Request $request)
    {
        $rate_input = $request['rate'];
        $rate_input += ['user_id' => $request->user()->id];
        $rate_input += ['game_id' => $game->id];
        $rate->fill($rate_input)->save();
        return redirect('/games/' . $game->id);
    }
}