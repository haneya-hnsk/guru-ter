<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoteController extends Controller
{
    public function index(){
        return view('vote');
    }
    public function store(Request $request){
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $user->candidate_id = $request->input('candidate_id');

        $user->save();

        return redirect('/success');
    }

    public function success(){
        return view('vote.success');
    }
}
