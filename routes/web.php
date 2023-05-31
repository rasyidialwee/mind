<?php

use App\Http\Controllers\SubjectController;
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
    // return view('welcome');
    // return 'Rasyidi';
    // return rand(4,100) / rand(4,100);
    // return view('belajar');
});

Route::get('/subjects',[SubjectController::class, 'index'])->name('subjects.index');

Route::get('/subjects/create',[SubjectController::class, 'create'])->name('subjects.create');

Route::post('/subjects', [SubjectController::class, 'store'])->name('subjects.store');

Route::get('/subjects/{subject}', [SubjectController::class, 'edit'])->name('subjects.edit');
// Route::get('/', [DashboardController::class, 'index']);
