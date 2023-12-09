<?php

use App\Http\Controllers\LearningPathController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use App\Models\LearningPath;
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
    return view('index');
});

Route::get('/progress', function () {
    return view('progress');
})->middleware(['auth', 'verified'])->name('progress');



Route::get('/admin/Materi', function () {
    
})->middleware(['auth', 'admin'])->name('admin2');

Route::resource('Materi', MateriController::class)
->middleware(['admin']);

Route::resource('LearningPath', LearningPathController::class)
->middleware(['admin']);

Route::get('{lp_nama}/show', [LearningPathController::class, 'show'])->name('LearningPath.show');

Route::get('{lp_nama}/{materi_judul}/show', [MateriController::class, 'show'])->name('Materi.show');

Route::get('/learning_path', function () {
    return view('learning_path');
});

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profil.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profil.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profil.destroy');
});

require __DIR__.'/auth.php';