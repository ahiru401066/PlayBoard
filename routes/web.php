<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
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

<<<<<<< HEAD
Route::get('/', [GameController::class, 'index']);
Route::get('/games/create', [GameController::class, 'create']);
Route::post('/games', [GameController::class, 'store']);
Route::get('/games/{game}', [GameController::class, 'show']);
Route::get('/games/{game}/edit', [GameController::class, 'edit']);
Route::put('/games/{game}', [GameController::class, 'update']);
Route::delete('/games/{game}', [GameController::class, 'delete']);
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(GameController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/games', 'store')->name('store');
    Route::get('/games/create', 'create')->name('create');
    Route::get('/games/{game}', 'show')->name('show');
    Route::put('/games/{game}', 'update')->name('update');
    Route::delete('/games/{game}', 'delete')->name('delete');
    Route::get('/games/{game}/edit', 'edit')->name('edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [GameController::class, 'index'])->name('index')->middleware('auth');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> origin/master
