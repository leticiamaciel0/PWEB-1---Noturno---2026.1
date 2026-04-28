<?php
class Produto {
    public function __construct(public string $nome, public float $preco) {}
}

class ItemPedido {
    public function __construct(public Produto $produto, public int $quantidade) {}
}

class Pedido {
    public string $id;
    public array $itens; // Array de ItemPedido
    public float $total;
    public string $whatsappLink;

    public function __construct(string $id, array $itens) {
        $this->id = $id;
        $this->itens = $itens;
    }
}