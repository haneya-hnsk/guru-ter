<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;

class KepsekController extends Controller
{
    public function index()
    {
        
        $teachers = Teacher::select('name')->distinct()->get();
        $disiplins = User::disiplin($teachers);
        $favorit_jurusans = User::favorit_jurusan($teachers);
        $kreatif_inovatifs = User::kreatif_inovatif($teachers);
        $sabar_ramahs = User::sabar_ramah($teachers);
        $humoris_menyenangkans = User::humoris_menyenangkan($teachers);
        $komunikatifs = User::komunikatif($teachers);
        // dd($voted);
        return view('kepsek.index', [
            'disiplins' => $disiplins,
            'favorit_jurusans' => $favorit_jurusans,
            'kreatif_inovatifs' => $kreatif_inovatifs,
            'sabar_ramahs' => $sabar_ramahs,
            'humoris_menyenangkans' => $humoris_menyenangkans,
            'komunikatifs' => $komunikatifs,
        ]);
    }
}
