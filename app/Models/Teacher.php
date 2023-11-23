<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $guarded = ['id'];

    public function scopeJurusan($query)
    {
        return $query->where('class', auth()->user()->class)
            ->where(function ($query) {
                $query->Where('jur', 1)
                   
                    ->get();
            });
        //    ->get();

    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'class', 'class');
    }
}
