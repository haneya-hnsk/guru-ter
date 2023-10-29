<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CommitController extends Controller
{
    public function index(){

        return view('commit.index', [
            // 'kelas' => 

            'classes' => User::select('class')->groupBy('class')->orderBy('class', 'asc')->get(),

            'users' => User::orderBy('name')->filter(Request(['name', 'class']))->paginate(40),
            // ->filter(request(['kelas', 'cari'])),
        ]);  
    }
}
