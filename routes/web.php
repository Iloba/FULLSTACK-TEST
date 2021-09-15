<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/todos', [TodoController::class, 'index'] )->name('todos.index');
Route::get('/create', [TodoController::class, 'create'])->name('todos.create');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'] )->name('todos.edit');
Route::patch('/todos/{todo}/update', [TodoController::class, 'update'])->name('todos.update');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');
Route::delete('/todos/{todo}/delete', [TodoController::class, 'delete'])->name('todos.delete');
Route::put('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todos.complete');
Route::delete('/todos/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todos.incomplete');