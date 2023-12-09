<?php

namespace App\Http\Controllers;

use App\Models\LearningPath;
use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UsersMateris;
class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materis = DB::table('materi')->paginate(15);
        $lps = DB::table('learning_path')->get();
        return view('admin.materi', ['materis' => $materis,'lps' => $lps]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lp = DB::table('learning_path')->get();
        return view("Materi.create",['lps'=> $lp]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:10', 'unique:'.Materi::class],
            'deskripsi' => ['required', 'min:3','max:100'],
            'isi'=>['required', 'min:3','max:1000'],
        ]);
        
        $filename = time().$request->file('image')->getClientOriginalName();

        $path = $request->file('image')->storeAs('images/Materi', $filename, 'public');
        
        $lp = LearningPath::find($request->lp);
        
        $lp->materis()->create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,  
            'image'=>'/storage/'.$path
        ]);
        return redirect(route('LearningPath.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($lp_nama,$materi_judul)
    {   
        $materi = DB::table('materi')->where('judul', $materi_judul)->first();
        $lp = DB::table('learning_path')->where('nama', $lp_nama)->first();
        $materis = LearningPath::find($lp->id)->materis;
        $user_id = Auth::User()->id;
        $user_materis = DB::table('users_materis')->where('users_id', $user_id)->get();
        return view("Materi.index", ['materi'=> $materi, 'lp'=> $lp, 'materis'=> $materis, 'user_materis'=>$user_materis]);
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
    public function update($materi)
    {
        $user_id = Auth::User()->id;
        $user_materis = DB::table('users_materis')->where('users_id', $user_id)->get();
        dd($user_materis);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}