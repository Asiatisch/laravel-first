<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

 Route::get('/home', function () {   
     return view('home');
 })->middleware(['auth']);
 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user/{id}' , [UserController::class, 'show']);


                   /*  NoteCrontroller */
// Route::get('/notes', [NoteController::class, 'index']);
// Route::get('/notes/create', [NoteController::class, 'create']);
// Route::get('/notes', [NoteController::class, 'store']);

// This line create a Route every function in the Note Reseource Controller
// Route::resources('/notes', NoteController::class, 'store');

// This line create a Route every Function in the Note Resource Controller
Route::resource('/notes', NoteController::class)->middleware(['auth']);


require __DIR__.'/auth.php';
