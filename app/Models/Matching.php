<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'user_id',
        'category_id',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function GetByMatching()
    {   
        return $this::with('category')->orderBy('updated_at', 'DESC')->get();
    }
}
