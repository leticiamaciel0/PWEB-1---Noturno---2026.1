<?php
class PedidoRepository {
    private string $db = __DIR__ . '/../data/pedidos.json';

    public function save(Pedido $pedido): void {
        $pedidos = $this->findAll();
        $pedidos[] = $pedido;
        file_put_contents($this->db, json_encode($pedidos, JSON_PRETTY_PRINT));
    }

    public function findAll(): array {
        if (!file_exists($this->db)) return [];
        return json_decode(file_get_contents($this->db), true) ?? [];
    }
}