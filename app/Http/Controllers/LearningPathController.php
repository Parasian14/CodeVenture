<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\LearningPath;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use App\Models\UsersMateris;

class LearningPathController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lps = DB::table('learning_path')->paginate(15);
        return view('admin.learningPath', ['lps' => $lps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("LearningPath.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:10', 'unique:'.LearningPath::class],
            'deskripsi' => ['required', 'min:3','max:100'],
            'isi'=>['required', 'min:3','max:1000'],
        ]);

        if($request->hasFile('image')){
            $filename = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images/LearningPath', $filename, 'public');
        }
        else {
            $path = null;
        }      
        LearningPath::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,  
            'image'=>'/storage/'.$path
        ]);
 
        return redirect(route('LearningPath.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($lp_nama)
    {
        $user_id = Auth::User()->id;
        $user = User::find($user_id);
        $lp = DB::table('learning_path')->where('nama', $lp_nama)->first();
        $materis = LearningPath::find($lp->id)->materis;
        
        //users-lps relation and users_materi's initial relation
        $pivot = DB::table('users_lps')->where([
            ['users_id',$user_id],
            ['lps_id',$lp->id]
        ])->first();
        if($pivot==null){
            foreach($materis as $materi){
                $user->umateris()->attach($materi->id, ['status'=> 'closed']);
            }
            $user->lps()->attach($lp->id);    
            UsersMateris::where('materis_id', $materis[0]->id)->update(['status' => 'open']);
        }       
        $user_materis = DB::table('users_materis')->where('users_id', $user_id)->get();
        return view("learningpath.index", ['lp'=> $lp, 'materis'=> $materis,'user_materis'=> $user_materis]);
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