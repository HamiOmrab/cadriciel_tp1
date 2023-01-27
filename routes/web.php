<?php

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


use App\Http\Controllers\VilleController ;
use App\Http\Controllers\EtudientController;

Route::get('/', function () {return view('welcome');})->name('blog.accueil');

Route::get('etudient', [EtudientController::class, 'index'])->name('blog.index');
Route::get('etudient/{etudient}', [EtudientController::class, 'show'])->name('blog.show');

Route::get('blog-create',  [EtudientController::class, 'create'])->name('blog.create');
Route::post('blog-create', [EtudientController::class, 'store']);


Route::get('blog-edit/{etudient}', [EtudientController::class, 'edit'])->name('blog.edit');
Route::put('blog-edit/{etudient}', [EtudientController::class, 'update']);

Route::delete('blog-edit/{etudient}', [EtudientController::class, 'destroy']);