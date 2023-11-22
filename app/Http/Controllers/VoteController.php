<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\UserVoted;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use \Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function index(){
        $candidates = Teacher::orderBy('name')->where('class', auth()->user()->class)->get();
        $study_candidates = Teacher::orderBy('name')->jurusan()->get();
        //  dd($study_candidates);
        return view('vote.index', [
            'candidates' => $candidates,
            'study_candidates' => $study_candidates
        ]

        );
    }
    public function update(Request $request, $id){
        $user = User::where('id', $id)->get()->first();

        // dd($request);
        // dd( User::where('id', $id)->get());
        $request->validate([
            'disiplin' => 'required',
            'kreatif_inovatif' => 'required',
            'sabar_ramah' => 'required',
            'humoris_menyenangkan' => 'required',
            'komunikatif' => 'required',
            'favorit_jurusan' => 'required',
        ]);


        $user->update([
            'disiplin' => $request->disiplin, 
            'kreatif_inovatif' => $request->kreatif_inovatif, 
            'sabar_ramah' => $request->sabar_ramah, 
            'humoris_menyenangkan' => $request->humoris_menyenangkan, 
            'komunikatif' => $request->komunikatif, 
            'favorit_jurusan' => $request->favorit_jurusan, 
            'voted' => true,
        ]);

        return redirect('/success');
        
    }

    public function success(){
        return view('vote.success');
    }
}
