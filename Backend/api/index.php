<?php
echo "Sistema de pedidos funcionando!";
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

// Autoload manual para manter o projeto sem dependências externas
require_once '../models/Pedido.php';
require_once '../patterns/DiscountStrategy.php';
require_once '../patterns/Observer.php';
require_once '../patterns/PedidoFactory.php';
require_once '../repositories/PedidoRepository.php';
require_once '../services/PedidoService.php';
require_once '../controllers/PedidoController.php';

$repo = new PedidoRepository();
$service = new PedidoService($repo);
$service->addObserver(new LogObserver()); // Ativando Observer

$controller = new PedidoController($service);
$controller->process();