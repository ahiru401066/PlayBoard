<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'name',
        'comment',
        'rate',
        'site_url',
        'lat',
        'lng',
    ];
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
