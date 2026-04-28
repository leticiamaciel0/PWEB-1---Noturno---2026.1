<?php
interface OrderObserver {
    public function update(Pedido $pedido);
}

class LogObserver implements OrderObserver {
    public function update(Pedido $pedido) {
        // Simula log de auditoria
        file_put_contents(__DIR__ . '/../data/log.txt', "Pedido {$pedido->id} criado em " . date('Y-m-d H:i:s') . PHP_EOL, FILE_APPEND);
    }
}