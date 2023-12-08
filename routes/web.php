<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\LearningPathController;
use App\Http\Controllers\ProfileController;
use App\Models\LearningPath;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'admin'])->name('admin');

Route::resources([
    'LearningPath' => LearningPathController::class,
]);

Route::get('/learning_path', function () {
    return view('learning_path');
});

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profil.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profil.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profil.destroy');
});

require __DIR__.'/auth.php';