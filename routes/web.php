<?php

use App\Http\Controllers\LearningPathController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgressController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

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

Route::resource('Progress', ProgressController::class)
->middleware(['auth', 'verified']);

Route::resource('Materi', MateriController::class)
->middleware(['admin'])->except('show');

Route::resource('LearningPath', LearningPathController::class)
->middleware(['admin'])->except('show');

Route::get('{lp_nama}/show', [LearningPathController::class, 'show'])
->middleware(['auth'])->name('LearningPath.show');

Route::get('{lp_nama}/{materi_judul}/show', [MateriController::class, 'show'])
->middleware(['auth'])->name('Materi.show');

Route::get('/learning_path', function () {
    $lps = DB::table('learning_path')->paginate(9);
    return view('learning_path',['lps'=>$lps]);
});

Route::post('/learning_path', function (request $request) {
    $lps = DB::table('learning_path')->where('nama','like','%'.$request->search.'%')->paginate(9);
    return view('learning_path',['lps'=>$lps]);
})->name('learning_search');

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profil.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profil.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profil.destroy');
});

Route::get('/preferences', function () {
    $materis = DB::table('materi')->paginate(9);
    return view('preferences',['materis'=> $materis]);
})->middleware(['auth']);

require __DIR__.'/auth.php';