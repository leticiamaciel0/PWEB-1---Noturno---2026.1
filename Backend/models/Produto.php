<?php
class Produto {
    public function __construct(public string $id, public string $nome, public float $preco) {}
}