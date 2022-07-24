<?php

use App\Http\Controllers\HomeController;
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


// STATIC HOME PAGES
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/committee', [HomeController::class, 'committee'])->name('committee');
Route::get('/objectives', [HomeController::class, 'objectives'])->name('objectives');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

// HOME RESOURCE
Route::resource('/home', HomeController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
