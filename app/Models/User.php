<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        // 'age',
        // 'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function matchings()
    {
        return $this->belongsToMany(Matching::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function rates()
    {
        return $this->hasMany(rate::class);
    }
    
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    
    public function opinions()
    {
        return $this->hasMany(Comment::class);
    }
}
