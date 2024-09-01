<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MatchingController;    
use App\Http\Controllers\OpinionController;    
use App\Http\Controllers\RateController;
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

Route::get('auth/register', function () {
    return view('auth/register');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(GameController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/games/create', 'create')->name('create');
    Route::post('/games', 'store')->name('store');
    Route::get('/games/{game}', 'show')->name('show');
    Route::put('/games/{game}', 'update')->name('update');
    Route::delete('/games/{game}', 'delete')->name('delete');
    Route::get('/games/{game}/edit', 'edit')->name('edit');
});

Route::get('/categories/{category}', [CategoryController::class, 'index'])->middleware("auth");
Route::post('/games/{game}/comment', [CommentController::class,'store'])->middleware(['auth'])->name('comment.store');
Route::post('/games/{game}/rate', [RateController::class,'store'])->middleware(['auth'])->name('rate.store');
// Matching
Route::get('/matchings/index', [MatchingController::class, 'index'])->middleware(['auth'])->name('matching');
Route::post('/matchings/create', [MatchingController::class, 'store'])->middleware(['auth'])->name('matching.store');
Route::get('/matchings/{matching}', [MatchingController::class, 'show'])->middleware(['auth'])->name('matching.show');
Route::post('/matchings/{matching}/join', [MatchingController::class, 'join'])->middleware(['auth'])->name('matching.join');
Route::delete('/matchings/{matching}/cancel', [MatchingController::class, 'cancel'])->middleware(['auth'])->name('matching.cancel');
Route::post('/matchings/{matching}/opinion', [OpinionController::class, 'store'])->middleware(['auth'])->name('matching.store');
// map
Route::get('/location/map', [LocationController::class, 'index'])->middleware(['auth'])->name('map');
Route::post('/location/store', [LocationController::class, 'store'])->middleware(['auth'])->name('map.store');

Route::middleware('auth')->group(function () {
    Route::get('/', [GameController::class, 'index'])->name('index')->middleware('auth');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
