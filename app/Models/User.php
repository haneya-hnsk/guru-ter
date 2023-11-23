<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Candidate;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id'
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['name'] ?? false, fn ($query, $name) =>
        $query->where('name', 'like', '%' . $name . '%'));

        $query->when($filters['class'] ?? false, fn ($query, $class) =>
        $query->where('class', 'like', '%' . $class . '%'));
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'password' => 'hashed',
    ];

    public function Candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }

    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class);
    }

    public function scopeDisiplin($query, $teachers){
        $disiplin = [];
        $i = 1;
        foreach($teachers as $teacher){
            // dd($teacher->name);
            $vote = User::where('disiplin', $teacher->name)->count();
            $total_vote = DB::select('select done from total_vote where name ="'.$teacher->name.'"' );
            $disiplin[$i++] = [
                'name' => $teacher->name,
                'vote' => $vote,
                'total_vote' => $total_vote[0]->done,
                'presentage' => $total_vote[0]->done != 0 ? round($vote / $total_vote[0]->done * 100, 5) : '0',
             ];
        }
        // arsort($disiplin);
        usort($disiplin, fn($a, $b) => $b['vote'] <=> $a['vote']);
        // dd($disiplin);
        return $disiplin;
    }

    public function scopeKreatif_inovatif($query, $teachers){
        $kreatif_inovatif = [];
        $i = 1;
        foreach($teachers as $teacher){
            // dd($teacher->name);
            $vote = User::where('kreatif_inovatif', $teacher->name)->count();
            $total_vote = DB::select('select done from total_vote where name ="'.$teacher->name.'"' );
            $kreatif_inovatif[$i++] = [
                'name' => $teacher->name,
                'vote' => $vote,
                'total_vote' => $total_vote[0]->done,
                'presentage' => $total_vote[0]->done != 0 ? round($vote / $total_vote[0]->done * 100, 4) : '0',
             ];
        }
        // arsort($kreatif_inovatif);
        usort($kreatif_inovatif, fn($a, $b) => $b['vote'] <=> $a['vote']);
        // dd($kreatif_inovatif);
        return $kreatif_inovatif;
    }

    public function scopeSabar_ramah($query, $teachers){
        $sabar_ramah = [];
        $i = 1;
        foreach($teachers as $teacher){
            // dd($teacher->name);
            $vote = User::where('sabar_ramah', $teacher->name)->count();
            $total_vote = DB::select('select done from total_vote where name ="'.$teacher->name.'"' );
            $sabar_ramah[$i++] = [
                'name' => $teacher->name,
                'vote' => $vote,
                'total_vote' => $total_vote[0]->done,
                'presentage' => $total_vote[0]->done != 0 ? round($vote / $total_vote[0]->done * 100, 4) : '0',
             ];
        }
        // arsort($sabar_ramah);
        usort($sabar_ramah, fn($a, $b) => $b['vote'] <=> $a['vote']);
        // dd($sabar_ramah);
        return $sabar_ramah;
    }

    public function scopeHumoris_menyenangkan($query, $teachers){
        $humoris_menyengkan = [];
        $i = 1;
        foreach($teachers as $teacher){
            // dd($teacher->name);
            $vote = User::where('humoris_menyenangkan', $teacher->name)->count();
            $total_vote = DB::select('select done from total_vote where name ="'.$teacher->name.'"' );
             $humoris_menyengkan[$i++] = [
                'name' => $teacher->name,
                'vote' => $vote,
                'total_vote' => $total_vote[0]->done,
                'presentage' => $total_vote[0]->done != 0 ? round($vote / $total_vote[0]->done * 100, 4) : '0',
             ];
        }
        // arsort($humoris_menyengkan);
        usort($humoris_menyengkan, fn($a, $b) => $b['vote'] <=> $a['vote']);
        // dd($humoris_menyengkan);
        return $humoris_menyengkan;
    }

    public function scopeKomunikatif($query, $teachers){
        $komunikatif = [];
        $i = 1;
        foreach($teachers as $teacher){
            // dd($teacher->name);
            $vote = User::where('komunikatif', $teacher->name)->count();
            $total_vote = DB::select('select done from total_vote where name ="'.$teacher->name.'"' );
             $komunikatif[$i++] = [
                'name' => $teacher->name,
                'vote' => $vote,
                'total_vote' => $total_vote[0]->done,
                'presentage' => $total_vote[0]->done != 0 ? round($vote / $total_vote[0]->done * 100, 4) : '0',
             ];
        }
        // arsort($komunikatif);
        usort($komunikatif, fn($a, $b) => $b['vote'] <=> $a['vote']);
        // dd($komunikatif);
        return $komunikatif;
    }

    public function scopeFavorit_jurusan($query, $teachers){
        $favorit_jurusan = [];
        $i = 1;
        foreach($teachers as $teacher){
            // dd($teacher->name);
            $vote = User::where('favorit_jurusan', $teacher->name)->count();
            $total_vote = DB::select('select done from total_vote where name ="'.$teacher->name.'"' );
             $favorit_jurusan[$i++] = [
                 'name' => $teacher->name,
                 'vote' => $vote,
                'total_vote' => $total_vote[0]->done,
                'presentage' => $total_vote[0]->done != 0 ? round($vote / $total_vote[0]->done * 100, 4) : '0',
             ];
        }
        // arsort($favorit_jurusan);
        usort($favorit_jurusan, fn($a, $b) => $b['vote'] <=> $a['vote']);
        // dd($favorit_jurusan);
        return $favorit_jurusan;
    }

    
}
