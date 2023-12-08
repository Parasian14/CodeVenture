<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\LearningPath;
use Illuminate\Validation\ValidateText;

class LearningPathController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("LearningPath.index");
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
        
        $filename = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $filename, 'public');
        
        LearningPath::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'isi' => $request->isi,  
            'image'=>'/storage/'.$path
        ]);
 
        return redirect(route('admin'));
    }

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