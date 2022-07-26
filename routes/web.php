<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// STATIC HOME PAGES
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/committee', [HomeController::class, 'committee'])->name('committee');
Route::get('/objectives', [HomeController::class, 'objectives'])->name('objectives');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/gallery-of-jikdral-rinpoche', [HomeController::class, 'galleryRinpoche'])->name('gallery-of-jikdral-rinpoche');
Route::get('/thechu-and-ngyarnga-puja', [HomeController::class, 'thechuNgyarngaPuja'])->name('thechu-and-ngyarnga-puja');
Route::get('/education-support', [HomeController::class, 'education'])->name('education-support');
Route::get('/letter-of-rinpoche', [HomeController::class, 'letterOfRinpoche'])->name('letter-of-rinpoche');
Route::get('/donation', [HomeController::class, 'donation'])->name('donation');

// HOME RESOURCE
Route::resource('/home', HomeController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
