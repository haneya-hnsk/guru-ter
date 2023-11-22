<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;

class KepsekController extends Controller
{
    public function index(){
        $voted = User::select('class', DB::raw('count(case voted when 1 then 1 else null end ) as vote'))->groupBy('class')->get();
        // $voice = User::where('')
        dd($voted);
        return view('kepsek.index', [
            
        ]);
    }
}
