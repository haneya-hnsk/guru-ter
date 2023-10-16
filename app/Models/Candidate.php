<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\HashNode;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead',
        'co_lead',
       
    ];

    public function User(): HasOne
    {
       return $this->hasOne(User::class);
    }
}
