<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::get('/', [NoteController::class,'index'])->name("notes.index");

Route::get('/create',[NoteController::class,'create'])->name("notes.create");

Route::post('/', [NoteController::class,'store'])->name("notes.store");

Route::get('/{note}',[NoteController::class,'show'])->name("notes.show");

Route::get('/{note}/edit',[NoteController::class,'edit'])->name("notes.edit");

Route::put('/{note}',[NoteController::class,'update'])->name("notes.update");
Route::delete('/{note}',[NoteController::class,'destroy'])->name("notes.destroy");


