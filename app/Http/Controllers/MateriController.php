<?php

namespace App\Http\Controllers;

use App\Models\LearningPath;
use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        if($request->hasFile('image')){
            $filename = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images/Materi', $filename, 'public');
        }
        else {
            $path = null;
        }  
        $lp = LearningPath::find($request->lp);
        $lp->materis()->create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,  
            'image'=>'/storage/'.$path
        ]);
        return redirect(route('Materi.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($lp_nama,$materi_judul)
    {   
        $materi = DB::table('materi')->where('judul', $materi_judul)->first();
        $lp = DB::table('learning_path')->where('nama', $lp_nama)->first();
        $materis = LearningPath::find($lp->id)->materis;
        return view("Materi.index", ['materi'=> $materi, 'lp'=> $lp, 'materis'=> $materis]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($materi_judul)
    {
        $materi = Materi::where('judul',$materi_judul)->first();
        return view('Materi.edit', ['materi'=> $materi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $materi_id)
    {
        $materi = Materi::find($materi_id)->first();
        if($materi->judul != $request->judul){
            $request->validate(['judul' => ['required', 'string', 'max:10', 'unique:'.Materi::class]]);
        }
        $request->validate([
            'deskripsi' => ['required', 'min:3','max:100'],
            'isi'=>['required', 'min:3','max:1000'],
        ]);
        if($request->hasFile('image')){
            $filename = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images/LearningPath', $filename, 'public');
        }
        else {
            $path = $materi->image;
        }
        $materi->Update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,  
            'image'=>'/storage/'.$path
        ]);
        return redirect(route('Materi.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($materi_id)
    {
        $path = Materi::find($materi_id)->image;
        Storage::delete($path);
        DB::table('materi')->where('id',$materi_id)->delete();

        return redirect(route('Materi.index'));
    }
}