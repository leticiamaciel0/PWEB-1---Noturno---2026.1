<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

// ==========================================
// EXERCÍCIOS 1 AO 5 - CURSOS
// ==========================================
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::get('/cursos/listagem', [CursoController::class, 'listagem']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);
Route::post('/cursos', [CursoController::class, 'store']);

// ==========================================
// EXERCÍCIO 6 - ALUNOS (RESOURCE)
// ==========================================
// O método only garante que apenas as rotas pedidas sejam criadas
Route::resource('alunos', AlunoController::class)->only([
    'index', 'create', 'store', 'show'
]);

// ==========================================
// EXERCÍCIO 7 - DESAFIO (DISCIPLINAS)
// ==========================================
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/nova', [DisciplinaController::class, 'create']);
Route::post('/disciplinas', [DisciplinaController::class, 'store']);
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);

// ==========================================
// ATIVIDADE - FLUXO CREATE -> STORE (PRODUTOS)
// ==========================================
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);