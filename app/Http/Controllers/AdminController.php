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
          'classes' => User::all('class')->keyBy('class')->groupBy('class', true),
            'users' => User::latest()->filter(Request(['name', 'class']))->paginate(40), ]);
    }
}
