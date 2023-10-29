<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'candidate_id',
        'email',
        'password',
    ];

    public function scopeFilter($query, array $filters){
        $query->when($filters['name'] ?? false, fn($query, $name) =>
        $query->where('name', 'like', '%' . $name . '%'));

        $query->when($filters['class'] ?? false, fn($query, $class) =>
        $query->where('class', 'like', '%' . $class . '%'));
    }

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
        'password' => 'hashed',
    ];

    public function Candidate(): BelongsTo
    {
       return $this->belongsTo(Candidate::class);
    }

    public function getClass()
    {

    }
}
