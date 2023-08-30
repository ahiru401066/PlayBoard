<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'comment',
        'user_id',
        'game_id',
    ];
    
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function GetByUser()
    {   
        return $this::with('user', 'game')->orderBy('updated_at', 'DESC')->get();
    }
}
