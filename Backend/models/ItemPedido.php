<?php

class ItemPedido {
    public function __construct(public Produto $produto, public int $quantidade) {}
    public function getSubtotal(): float { return $this->produto->preco * $this->quantidade; }
}