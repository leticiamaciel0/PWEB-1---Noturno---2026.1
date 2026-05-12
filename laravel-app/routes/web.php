<?php

use Illuminate\Support\Facades\Route;
// ADICIONE ESTA LINHA ABAIXO:
use App\Http\Controllers\PaginaController; 

// Atividade 1
Route::get('/ola', function () {
    return 'Olá, Laravel!';
});

// Atividade 2
Route::get('/curso/ads', function () {
    return 'Curso de Análise e Desenvolvimento de Sistemas';
});

// Atividade 3
Route::get('/curso/web', function () {
    return 'Disciplina Programação Web I';
});

// Atividade 4
Route::view('/sobre', 'sobre');

// Atividade 5
Route::view('/contato', 'contato');

// Atividade 6
Route::view('/institucional/missao', 'missao');

// Atividades 7, 8, 9 e 10
Route::get('/empresa', [PaginaController::class, 'empresa']);
Route::get('/servicos', [PaginaController::class, 'servicos']);
Route::get('/portfolio', [PaginaController::class, 'portfolio']);
Route::get('/blog', [PaginaController::class, 'blog']);
Route::get('/equipe', [PaginaController::class, 'equipe']);

// Atividade 11
Route::get('/usuario/{nome}', function ($nome) {
    return "Usuário: " . $nome;
});

// Atividade 12
Route::get('/produto/{id}', [PaginaController::class, 'produto']);