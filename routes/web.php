<?php

use App\Http\Controllers\LearningPathController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $lps = DB::table('learning_path')->paginate(3);
    return view('index',['lps'=>$lps]);
});

Route::get('/progress', function () {
    $user_lp = DB::table('users_lps')->where('users_id', Auth::user()->id)->get()->pluck('lps_id')->toArray();
    $lps = DB::table('learning_path')->whereIn('id',$user_lp)->orderByRaw("FIELD(id, " . implode(",", $user_lp) . ")")->get();  
    return view('progress',['lps'=>$lps]);
})->middleware(['auth', 'verified'])->name('progress');

Route::resource('Materi', MateriController::class)
->middleware(['admin'])->except('show');

Route::resource('LearningPath', LearningPathController::class)
->middleware(['admin'])->except('show');

Route::get('{lp_nama}/show', [LearningPathController::class, 'show'])->name('LearningPath.show');

Route::get('{lp_nama}/{materi_judul}/show', [MateriController::class, 'show','update'])->name('Materi.show');

Route::get('/learning_path', function () {
    $lps = DB::table('learning_path')->paginate(9);
    return view('learning_path',['lps'=>$lps]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profil.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profil.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profil.destroy');
});

require __DIR__.'/auth.php';