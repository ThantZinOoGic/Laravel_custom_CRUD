<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function (){
    Route::get('movies/create', [MovieController::class, 'create'])->name('movie.create');
    Route::post('movies', [MovieController::class, 'store'])->name('movie.store');
    Route::get('movies', [MovieController::class, 'index'])->name('movie.index');
    Route::delete('movies/{movieId}', [MovieController::class, 'destroy'])->name('movie.destroy');
    Route::get('movies/{movieId}', [MovieController::class, 'show'])->name('movie.show');
    Route::get('movies/{movieId}/edit', [MovieController::class, 'edit'])->name('movie.edit');
    Route::put('movies/{movieId}', [MovieController::class, 'update'])->name('movie.update');
});






