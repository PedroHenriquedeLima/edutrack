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

    Route::get('/alunos/{status}/listar', 'index')->name('student.filter');

    Route::get('/aluno/{id}/editar', 'edit')->name('student.edit');

    Route::put('/aluno/{id}/editar/salvar', 'update')->name('student.update');

    Route::get('/aluno/{id}/pagamento', 'payment')->name('student.payment');

    Route::get('/aluno/{id}/pagamento/confirmar', 'updatePayment')->name('student.updatePayment');

    Route::get('/aluno/{id}/inativar', 'inactivate')->name('student.inactivate');
    
    Route::delete('/aluno/excluir/{id}', 'destroy')->name('student.destroy');

    Route::get('/aluno/{id}/detalhes', 'show')->name('student.show');

});