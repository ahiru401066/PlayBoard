<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Game;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Comment $comment, Game $game, Request $request)
    {
        $comment_input = $request['comment'];
        $comment_input += ['user_id' => $request->user()->id];
        $comment_input += ['game_id' => $game->id];
        $comment->fill($comment_input)->save();
        return redirect('/games/' . $game->id);
    }
}
