<?php

use App\Http\Controllers\TodosController;
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

Route::get('/todos', [TodosController::class, 'index'])->name('index');
Route::post('/create/todo', [TodosController::class, 'create'])->name('create.todo');
Route::get('/delete/todo/{id}', [TodosController::class, 'destroy'])->name('delete.todo');
Route::get('/update/todo/{id}', [TodosController::class, 'update'])->name('update.todo');
Route::post('/edit/todo/{id}', [TodosController::class, 'edit'])->name('todo.update');