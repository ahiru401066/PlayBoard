<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'matching_id',
        'opinion',
        ];
        
    public function user()
    {
        return $this->belongsTo(User::class);
    }
        
    public function matching()
    {
        return $this->belongsTo(Matching::class);
    }
}
