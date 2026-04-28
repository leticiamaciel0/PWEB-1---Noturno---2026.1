<?php
class PedidoFactory {
    public static function create(array $data): Pedido {
        $itens = [];
        foreach ($data['itens'] as $item) {
            $produto = new Produto($item['nome'], $item['preco']);
            $itens[] = new ItemPedido($produto, $item['quantidade']);
        }
        return new Pedido(uniqid('PED_'), $itens);
    }
}