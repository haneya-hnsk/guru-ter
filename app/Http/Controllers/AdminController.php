<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $users = User::class::all();
        $dahlah = User::class;
        return view('admin.index', ['dahlah' => $dahlah, 'users' => $users ]);
    }
}
