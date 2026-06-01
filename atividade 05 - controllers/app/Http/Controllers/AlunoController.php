<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('alunos.index');
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        // Simulação de salvamento
        return "Aluno salvo com sucesso!";
    }

    public function show($id)
    {
        return view('alunos.show', compact('id'));
    }
}