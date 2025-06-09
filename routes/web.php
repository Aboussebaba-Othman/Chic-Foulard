<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
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
    $articles = \App\Models\Article::latest()->take(6)->get();
    return view('home', compact('articles'));
})->name('home');

Route::get('/shales', function () {
    return view('shales');
})->name('shales');

Route::get('/foulards', function () {
    return view('foulards');
})->name('foulards');


Route::get('/contact', function(){
    return view('contact');
})->name('contact');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route accessible sans authentification pour voir un article
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Article management routes (sauf show qui est défini au-dessus)
    Route::resource('articles', ArticlesController::class)->except(['show']);
});

require __DIR__.'/auth.php';
