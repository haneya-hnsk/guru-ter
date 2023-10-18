<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CommitController extends Controller
{
    public function index(){

        return view('commit.index', [
            // 'kelas' => 
            'classes' => User::all('class')->keyBy('class')->groupBy('class', true),
            'users' => User::latest()->filter(Request(['name', 'class']))->paginate(40),
            // ->filter(request(['kelas', 'cari'])),
        ]);   
    }
}
