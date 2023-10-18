<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\UserVoted;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function index(){
        $candidates = Candidate::class::all();
        return view('vote.index', ['candidates' => $candidates]);
    }
    public function store(Request $request){
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $user->candidate_id = $request->input('candidate_id');

        $user->save();
        event(new UserVoted($user)); // broadcast `UserVoted` event


        return redirect('/success');
    }

    public function success(){
        return view('vote.success');
    }
}
