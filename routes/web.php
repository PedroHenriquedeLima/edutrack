<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rotas de alunos

Route::controller(StudentController::class)->group(function () {
    
    Route::get('/aluno/cadastrar', 'create')->name('student.create');

    Route::post('/aluno/cadastrar', 'store')->name('student.store');

    Route::get('/alunos/{status}/listar', 'index')->name('student.index');

    Route::get('/aluno/editar/{id}', 'edit')->name('student.edit');

    Route::put('/aluno/editar/{id}', 'update')->name('student.update');

    Route::delete('/aluno/excluir/{id}', 'destroy')->name('student.destroy');

    Route::get('/aluno/{id}/detalhes', 'show')->name('student.show');

});