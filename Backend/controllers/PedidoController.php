<?php
class PedidoController {
    public function __construct(private PedidoService $service) {}

    public function process() {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            echo json_encode($this->service->listarTudo());
        } elseif ($method === 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            $res = $this->service->criarPedido($data);
            echo json_encode($res);
        }
    }
}