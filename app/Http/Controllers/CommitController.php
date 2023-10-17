<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CommitController extends Controller
{
    public function index(){
        $dahlah = User::class;

        return view('commit.index', [
            // 'kelas' => 
            'users' => User::latest()->filter(Request(['cari']))->get(),
            'dahlah' => $dahlah,
            // ->filter(request(['kelas', 'cari'])),
        ]);   
    }
}
