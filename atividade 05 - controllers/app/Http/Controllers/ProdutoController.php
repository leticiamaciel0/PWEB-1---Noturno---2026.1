<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $nomeProduto = $request->input('nome_produto');
        return "Produto enviado via POST: " . $nomeProduto;
    }
}