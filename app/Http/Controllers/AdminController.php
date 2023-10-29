<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $dahlah = User::class;
        return view('admin.index', [
            'dahlah' => $dahlah, 
            'classes' => User::select('class')->groupBy('class')->orderBy('class', 'asc')->get(),

            'users' => User::orderBy('name')->filter(Request(['name', 'class']))->paginate(40),
        ]);
            // ->filter(request(['kelas', 'cari'])),
    }
}
