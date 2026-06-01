<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Exercício 1
    public function index()
    {
        return 'Lista de cursos';
    }

    // Exercício 2
    public function create()
    {
        return view('cursos.create');
    }

    // Exercício 3
    public function listagem()
    {
        $cursos = ['Análise e Desenvolvimento de Sistemas', 'Redes de Computadores', 'Ciência da Computação'];
        return view('cursos.listagem', compact('cursos'));
    }

    // Exercício 4
    public function show($id)
    {
        return "Curso selecionado: ID " . $id;
    }

    // Exercício 5
    public function store(Request $request)
    {
        $nomeCurso = $request->input('nome');
        return "Curso cadastrado: " . $nomeCurso;
    }
}