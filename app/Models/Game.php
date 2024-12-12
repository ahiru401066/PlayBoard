<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'body',
        'category_id',
        'number',
        'game_time',
        'release',
        'level',
        'image_url',
        ];
    
    public function getPaginateByLimit(int $limit_count = 4)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function rates()
    {
        return $this->hasMany(Rate::class);
    }
}
