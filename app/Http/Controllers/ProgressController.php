<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\Models\LearningPath;
use Hamcrest\Type\IsInteger;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $user_lp = DB::table('users_lps')->where('users_id', Auth::user()->id)->get()->pluck('lps_id')->toArray();
        if($user_lp==[]){
            $lps = [];
        }
        else {
            $lps = DB::table('learning_path')->whereIn('id',$user_lp)->orderByRaw("FIELD(id, " . implode(",", $user_lp) . ")")->get();
        }
        return view('progress',['lps'=>$lps]);
    }

    public function store(Request $request)
    {
        $user_id = Auth::User()->id;
        $user = User::find($user_id);
        foreach($request->all() as $key=>&$value){
            if(is_int($key)) {
                $materi = DB::table('materi')->where('id', $key)->first();
                $lp = DB::table('learning_path')->where('id', $materi->learning_path_id)->first();
                $pivot = DB::table('users_lps')->where([
                    ['users_id',$user_id],
                    ['lps_id',$lp->id]
                ])->first();
                if($pivot==null){  
                    $user->lps()->attach($lp->id);    
                }
            }
        }
        return redirect(route('Progress.index'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}